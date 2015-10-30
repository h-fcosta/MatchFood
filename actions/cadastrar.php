<?php

include ("connect.php");

if ($link != null) {
    $nome = utf8_decode($_POST['nome']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaRep = $_POST['senhaRep'];


    $checkEmail = mysqli_query($link, "SELECT email FROM usuario");

    while ($emailInfo = mysqli_fetch_array($checkEmail)) {
        $emailCheck = $emailInfo['email'];
    }

    if ($email != $emailCheck) {
        if ($senhaRep == $senha) {
            $senhaEnc = hash('sha512', $senha);

            $queryUser = mysqli_query($link, "INSERT INTO `matchfood`.`usuario` (`Nome`, `Email`, `Senha`) VALUES ('$nome', '$email', '$senhaEnc');");

            header("location: index.php");
        }
    } else {
        echo "Email já utilizado";
    }
}