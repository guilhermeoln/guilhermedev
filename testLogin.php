<?php
       session_start();
       //sprint_r($_REQUEST);
       if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
       {
         //Acessa
         include_once('config.php');
         $email = $_POST['email'];
         $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
         //print_r('Senha: ' . $senha);

         $sql = "SELECT * FROM formulario WHERE email = '$email' and senha = '$senha' ";

         $result = $conexao->query($sql);

         //print_r($result);

         if(mysqli_num_rows($result) < 1)
         {
             unset($_SESSION['email']);
             unset($_SESSION['senha']);
             header('Location: primeiro_projeto.php');
         }
         else
         {
             $_SESSION['email'] = $email;
             $_SESSION['senha'] = $senha;
             header('Location: sistema.php');
         }

       }
       else
       {
           //Não acessa
           header('location: primeiro_projeto.php');

       }

?>