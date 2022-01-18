<?php

     if(isset($_POST['submit']))

     {
        // print_r($_POST['login']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['senha']);
        // print_r('<br>');
        // print_r($_POST['senha2']);

        include_once('config.php');
        
        $login = $_POST['login'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        $result = mysqli_query($conexao, "INSERT INTO formulario(usuario,email,senha,senha2) VALUES ('$login','$email','$senha','$senha2') ");

     }

?>



<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo2.css">
        <title>Tela de cadastro</title>
    </head>
    <body>
        <div id="form">
         <form action="cadastro.php" method="POST">
            <input type="text" name="login" class="login" placeholder="Usuario"><Br>
            <input type="email" name="email" class="email" placeholder="Digite seu email">
            <input type="password" name="senha" class="senha" placeholder="Digite a senha" required>
            <input type="password" name="senha2"class="senha2" placeholder="Repita a senha" required>
            <input type="submit" name="submit" value="Cadastre-se" class="botao" >
         </form>
         <button onclick="window.location.href = 'primeiro projeto.html'" class="botao2">Voltar</button>
        </div>
        <div id="texto">
        </div>
        <img src="logo3.jpg" alt="minha figura" class="img">

       


    </body>
</html>