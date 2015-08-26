<?php

include("../connect.php");

@$action = $_POST["enviar"];

switch ($action) {
    case 'insertRec':
        $fotoRec = $_POST["FotoRec"];
        $nomeRec = $_POST["NomeRec"];
        $tipoRec = $_POST["TipoRec"];
        $origemRec = $_POST["OrigemRec"];
        $ingreRec = $_POST["IngRec"];
        $modoRec = $_POST["ModoRec"];
        $tagsRec = $_POST["TagsRec"];

        mysql_query("INSERT INTO `receitas` (`Foto`, `NomeRec`, `Tipo`, `Origem`, `Ingredientes`, `Modo`, `TAGS`) VALUES
            ('$fotoRec', '$nomeRec', '$tipoRec', '$origemRec', '$ingreRec', '$modoRec', '$tagsRec')");

        header("Location:insertRec.php");

        break;
    
    case 'insertIng':
        $fotoIng = $_POST["FotoIng"];
        $nomeIng = $_POST["NomeIng"];
        $catIng = $_POST["CatIng"];
        
        mysql_query("INSERT INTO `ingredientes` (`Foto`, `NomeIng`, `Categoria`) VALUES ('$fotoIng', '$nomeIng', '$catIng')");
        
        header("Location:insertIng.php");
        
        break;
}
?>
