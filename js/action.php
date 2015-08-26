<?php

include ("../connect.php");

@$action = $_GET["act"];
$result = array('status' => 'false');

if ($action == 'listRec') {
    @$id = $_GET['id'];
    $query = mysql_query("SELECT * FROM receitas WHERE idReceitas = " . $id);

    if (mysql_num_rows($query) > 0) {
        $result = array('status' => 'true');

        while ($array = mysql_fetch_array($result)) {
            $dados = array(
                'id' => $array['idReceitas'],
                'foto' => $array['Foto'],
                'nomeRec' => $array['NomeRec'],
                'tipo' => $array['Tipo'],
                'origem' => $array['Origem'],
                'ingredientes' => $array['Ingredientes'],
                'modo' => $array['Modo'],
                'tags' => $array['TAGS']
            );
        }
    }
}

echo (json_encode($dados));

