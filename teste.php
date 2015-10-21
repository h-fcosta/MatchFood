<?php

include("connect.php");

/* Assume $link is already prepared as MySQL resource. */

// search query split by spaces
$user_input = 'carne batata';

// create string for mysql_auery()


/*$sql = 'SELECT * FROM receitas WHERE ';

for ($i = 1; $i <= 10; $i++) {
    $string = 'tag' . $i . " LIKE '%" . $user_input . "%' ";
    if ($i > 1) {
        $sql .= " or ";
    }
    $sql .= $string;
}

echo mysqli_query($link, $sql);*/

$sql = 'SELECT * FROM receitas WHERE ';
foreach (array_filter(explode(" ", $user_input), 'strlen') as $keyword) {
    for ($i = 1; $i <= 10; $i++) {
        $where [] = 'tag' . $i . " LIKE '" . mysqli_escape_string($link, '%' . addcslashes($keyword, '%_\\') . '%') . "'";
    }
}

$sql .= implode(" or ", $where);

echo $sql;
