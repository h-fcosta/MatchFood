<?php

include ("connect.php");

if ($link != null) {
    $nome = utf8_decode($_POST['nome']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaRep = $_POST['senhaRep'];

    $checkEmail = mysqli_query($link, "SELECT * FROM usuario WHERE email = '$email'");
    $num = mysqli_num_rows($checkEmail);
    
    /*while($teste = mysql_fetch_array($checkEmail)){
        $testeMail = $teste['email'];
    }*/
    echo "num = $num<br>";
    print_r($checkEmail);
    //echo $email."<br>".$testeMail;*/
    
    if ($num == 0) {
        if ($senhaRep == $senha) {
            $senhaEnc = hash('sha512', $senha);

            $queryUser = mysqli_query($link, "INSERT INTO `matchfood`.`usuario` (`Nome`, `Email`, `Senha`) VALUES ('$nome', '$email', '$senhaEnc');");

            header("location: ../cadastro.php?positive");
        }
    } else {
        header('location: ../cadastro.php?negative');
    }
}