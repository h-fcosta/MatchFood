<?php

include ("connect.php");

session_start();

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        $erro = "Campos obrigatórios";
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $email = stripslashes($email);
        $senha = stripslashes($senha);
        
        $email=  mysqli_escape_string($link, $email);
        $senha = mysqli_escape_string($link, $senha);
        
        $query=  mysqli_query($link, "SELECT idUsuario, Email, Senha FROM usuario WHERE Email='$email' AND Senha='$senha'");
        
        $num=  mysqli_num_rows($query);
        
        if($num == 1){
            $_SESSION['login_user'] = $email;
            $_SESSION['logado'] = true;
            header("location: favoritos.php");
        }else{
            echo 'ERRO';
            header("location:index.php");
            //$erro = "Email ou senha inválidos";
        }
    }
}