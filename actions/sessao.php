<?php

include("connect.php");

session_start();
@$status = $_SESSION['logado'];

if ($status != null) {
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($link, "SELECT idUsuario FROM usuario WHERE Email='$user_check'");

    $row = mysqli_fetch_assoc($ses_sql);

    $loginSession = $row['idUsuario'];
}
