<?php

include '../actions/connect.php';

@session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$passEnc = hash('sha512', $pass);

$query = mysqli_query($link, "SELECT * FROM usuario WHERE Email='$user' AND Senha='$passEnc';");

if ($query) {
    $num = mysqli_num_rows($query);

    if ($num == 1) {
        while ($array = mysqli_fetch_array($query)) {
            $tipo = $array['TipoUsr'];
        }
        if ($tipo == 'admin') {
            $sessao = $_SESSION['admin'];
            
            header('location:index.php');
        } else {
            echo 'AQUI NÃO QUERIDINHA';
        }
    }
}
