<?php
include '../actions/connect.php';

$id = $_GET['id'];

if($link){
    $delete = mysqli_query($link, "DELETE FROM `matchfood`.`receitas` WHERE `idReceitas`='$id' and`Usuario_idUsuario`='1';");
    
    header("location: listaRecUsr.php");
}

