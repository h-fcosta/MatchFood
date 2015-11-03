<?php
include '../actions/connect.php';

$id=$_POST['id'];
$nomeRec = $_POST['nomeRec'];
$tipo = $_POST['tipo'];
$origem = $_POST['origem'];
$tempo = $_POST['tempo'];
$rend = $_POST['rendimento'];
$ingr = $_POST['ingredientes'];
$modo = $_POST['modo'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];
$tag4 = $_POST['tag4'];
$tag5 = $_POST['tag5'];
$tag6 = $_POST['tag6'];
$tag7 = $_POST['tag7'];
$tag8 = $_POST['tag8'];
$tag9 = $_POST['tag9'];
$tag10 = $_POST['tag10'];


if($link){
    mysqli_query($link, "UPDATE `matchfood`.`receitas` SET `NomeRec`='$nomeRec', `Tipo`='$tipo', `Origem`='$origem', `Tempo`='$tempo', `Rendimento`='$rend',
                        `Ingredientes`='$ingr', `Modo`='$modo', `Tag1`='$tag1', `Tag2`='$tag2', `Tag3`='$tag3', `Tag4`='$tag4', `Tag5`='$tag5', `Tag6`='$tag6',
                        `Tag7`='$tag7', `Tag8`='$tag8', `Tag9`='$tag9', `Tag10`='$tag10' WHERE `idReceitas`='$id' and`Usuario_idUsuario`='1';");
    
    header("location: listaRecUsr.php");
}