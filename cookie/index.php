<?php
$cookie_name = "user";
$cookie_value ='teste' ;
$cookie_name2 = "senha";
$cookie_value2 ='123' ;

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");

?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Sistema de Login </title>
        <meta charset="UTF-8" />
        <!-- Estilos da Index.php -->
        <style type="text/css">
            body{
                background-color :#7CAFF5;
            }
            div.teste{
            width: 40%;
            height: auto;
            background-color: #fff;
            border: 1px solid #606060;
            padding: 50px;
            box-shadow: 0px 0px 10px #000;
            margin-top: 10%;
            /* Centralizando a div 
            
            *O atributo text-align foi depreciado. 
            
            */
            margin-left: auto;
            margin-right: auto;
            }
            input[type='text'], input[type='password']{
            width: 300px;
            height: 25px;
            border: solid 1px #606060;
            border-radius: 5px;
            }
            input[type='password']{
            margin-left: 10px;
            }
            
            input[type='submit']{
            width: 150px;
            }
        </style>
    </head>
    <body>
        <div class="teste">
            <!-- Aqui temos o formulário
                *Action é vazia por que vamos fazer a validação e o redirecionamento nesta mesma página.
            -->
            <form name="" method="post" action="">
                <label>Usuário: <input type="text" name="user" /></label><br /><br />
                <label>Senha: <input type="password" name="senha" /></label><br /><br />
                <input type="submit" name="submit" value="Logar!" />
            </form>
            <?php
                /* Declaração de Variáveis */
                $user = @$_REQUEST['user'];
                $senha = @$_REQUEST['senha'];
                $submit = @$_REQUEST['submit'];
                
                /* Declaração das variáveis que possuem os usuarios e as senhas */
                $user1 = 'teste';
                $senha1 = '123';
                
                $user2 = 'gabrielsooco';
                $senha2 = 'b3gabriel';
                
                /* Testa se o botão submit foi ativado */
                if($submit){
                    
                    /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
                    if($user == "" || $senha == ""){
                        echo "<script>alert('Por favor, preencha todos os campos!');</script>";
                    }
                    /* Caso o campo usuario e senha não 
                        *estejam vazios vamos testar se o usuário e a senha batem 
                    *iniciamos uma sessão e redirecionamos o usuário para o painel */
                    else{
                        if(($user == $user1 && $senha == $senha1) || ($user == $user2 && $senha == $senha2)){
                            // Define os cookies para usuário e senha
                            setcookie("user", $user, time() + (86400 * 30), "/");
                            setcookie("senha", $senha, time() + (86400 * 30), "/");
                            
                            session_start();
                            $_SESSION['usuario']=$user;
                            $_SESSION['senha']=$senha;
                            header("Location: result.php");
                        }
                        /* Se o usuario ou a senha não batem alertamos o usuario */
                        else{
                            echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>

