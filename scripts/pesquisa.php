<?php

include ("../connect.php");

@$cons = $_GET['s'];

$query = mysqli_query($link, "SELECT idReceitas, Foto, NomeRec, Tipo, Origem FROM matchfood.receitas where tag1 LIKE '%" . $cons . "%' or tag2 LIKE '%" . $cons .
        "%' or tag3 LIKE '%" . $cons . "%'or tag4 LIKE '%" . $cons . "%' or tag5 LIKE '%" . $cons . "%' or tag6 LIKE '%" . $cons . "%' or tag7 LIKE
            '%" . $cons . "%' or tag8 LIKE '%" . $cons . "%' or tag9 LIKE '%" . $cons . "%' or tag10 LIKE '%" . $cons . "%';");
$num = mysqli_num_rows($query);

/*while ($info = mysqli_fetch_array($query)) {
    $foto = $info['Foto'];
    $nome = $info['NomeRec'];
    $tipo = $info['Tipo'];
    $origem = $info['Origem'];
    
    
}

echo "Foto: " . $foto . "<br>";
echo "Nome: " . $nome . "<br>";
echo "Tipo: " . $tipo . "<br>";
echo "Origem: " . $origem . "<br>";*/

for ($i = 0; $i < $num; $i++) {
    $dados[] = mysqli_fetch_assoc($query);
}


//header("Location: ../teste.php");
echo json_encode($dados, JSON_PRETTY_PRINT);
