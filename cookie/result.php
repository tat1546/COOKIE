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
            <h4> Seja bem-vindo </h4>
            <?php
                 

                 // Verifica se os cookies 'email' e 'senha' estão definidos
                 if (isset($_COOKIE['user'])) {
                     
                     // Obtém e exibe o valor do cookie 'email'
                     $cookie_nome = $_COOKIE['user'];
                     echo "<b>Usuário:</b> $cookie_nome<br>";

                     // Verifica se o cookie 'senha' está definido
                     if (isset($_COOKIE['senha'])) {
                         
                         // Obtém e exibe o valor do cookie 'senha'
                         $cookie_nome2 = $_COOKIE['senha'];
                         echo "<b>Senha:</b> $cookie_nome2";
                     } 
                 
                     else {
                         echo "Senha não disponível";
                     }
                 }   
             
                 else {
                     echo "Cookies não encontrados.";
                 }

             ?>
        </div>
    </body>
</html>

