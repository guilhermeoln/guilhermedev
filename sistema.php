<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: primeiro_projeto.php');
    }
    $logado = $_SESSION['email'];
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema</title>
    </head>
    <body>
        <?php
            echo "<h1>Bem vindo <u>$logado</u></h1>";
        ?>
        <div class="d-flex">
            <a href="sair.php" class="botao">Sair</a>
    </body>
</html>
 