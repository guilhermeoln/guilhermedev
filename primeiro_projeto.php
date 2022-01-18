<?php

     if(isset($_POST['submit']))

     {
         print_r($_POST['email']);
         print_r($_POST['senha']);
     }
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Tela de login</title>
    </head>
    <body>
        <div id="form">
         <form action="testLogin.php" method="POST">
            <input type="email" name="email" class="login" placeholder="Email"><Br>
            <input type="password" name="senha" class="senha" placeholder="Senha">
            <input type="submit" name="submit" value="Login" class="botao" >
         </form>
         <button onclick="window.location.href = 'cadastro.html'" class="botao2">Cadastre-se</button>
        </div>       
        <div id="texto">
        <a href="esqueceu.html" class="esqueceu">Esqueceu a senha?</a>
        </div>
        <img src="logo3.jpg" alt="minha figura" class="img">

       


    </body>
</html>