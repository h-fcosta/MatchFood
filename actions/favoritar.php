<?php
include ("connect.php");

$idRec = $_GET['id'];
$idUser = $_GET['idUser'];

$add_fav = mysqli_query($link, "INSERT INTO `matchfood`.`favoritos` (`Usuario_idUsuario`, `Receitas_idReceitas`) VALUES ('$idUser', '$idRec');");

header("location: ../favoritos.php");
