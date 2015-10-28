<?php
include ("connect.php");

if($link != null){
    $nome = utf8_decode($_POST['nome']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaRep = $_POST['senhaRep'];
    
    if($senhaRep == $senha){
        $senhaEnc = hash('sha512', $senha);
        
        $queryUser = mysqli_query($link, "INSERT INTO `matchfood`.`usuario` (`Nome`, `Email`, `Senha`) VALUES ('$nome', '$email', '$senhaEnc');");
        
        
        if(!$queryUser){
            echo '<script type="text/javascript">alert("'.mysqli_error($link).'");</script>';
        }else{
            echo '<script type="text/javascript">alert("sucesso");</script>';
            header("location: index.php");
        }
        
    }else{
        echo '<script type="text/javascript">alert("erro");</script>';
           
    }
}
