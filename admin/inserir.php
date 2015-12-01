<?php

include '../actions/connect.php';

$pasta = "fotos/";
$foto = '';
$permitidos = array(".jpg", ".jpeg", ".png");

if (isset($_FILES['foto']['name'])) {
    $nome_imagem = $_FILES['foto']['name'];
    $tamanho_imagem = $_FILES['foto']['size'];
    $ext = strtolower(strrchr($nome_imagem, "."));

    if (in_array($ext, $permitidos)) {

        $nome_atual = md5(uniqid(time())) . $ext;
        $tmp = $_FILES['foto']['tmp_name'];
        if (move_uploaded_file($tmp, $pasta . $nome_atual)) {
            $foto = $pasta . $nome_atual;
            echo $foto;
        } else {
            echo "Falha ao enviar";
        }
    } else {
        echo "Tipo de arquivo não suportado";
    }
} else {
    echo "Seleciona uma imagem";
}

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

//LEMBRETE IMPORTANTE COLOCAR FOTO DE NOVO

if ($link) {
    $queryIns = mysqli_query($link, "INSERT INTO `matchfood`.`receitas` ( `Foto`, `NomeRec`, `Tipo`, `Origem`, `Tempo`, `Rendimento`, `Ingredientes`,
                                `Modo`, `Tag1`, `Tag2`, `Tag3`, `Tag4`, `Tag5`, `Tag6`, `Tag7`, `Tag8`, `Tag9`, `Tag10`, `Usuario_idUsuario`) 
                                VALUES ('$foto','$nomeRec', '$tipo', '$origem', '$tempo', '$rend', '$ingr', 
                                '$modo', '$tag1', '$tag2', '$tag3', '$tag4', '$tag5', '$tag6', '$tag7', '$tag8', '$tag9', '$tag10', '1');");

    header("location: listaRecUsr.php");
}