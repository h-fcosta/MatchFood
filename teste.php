<?php

include("actions/connect.php");

if (isset($_SESSION['login'])) {
    header("Location: index.php");
}

echo '<form action="login.php" method="post" name="login">
        <table>
        <tr>
            <td>E-mail</td>
            <td><input type="text" name="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" placeholder="Senha"></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Entrar"></td>
        </tr>
        </table>
      </form>   ';


$query = mysqli_query($link, "SELECT * FROM receitas where idReceitas = '2';");

while ($info = mysqli_fetch_array($query)) {
    $foto = $info['Foto'];
    $nome = $info['NomeRec'];
    $tipo = $info['Tipo'];
    $origem = $info['Origem'];
    $ingredientes = $info['Ingredientes'];
    $modo = $info['Modo'];
    $tempo = $info['Tempo'];
    $rendimento = $info['Rendimento'];
    $tag1 = $info['Tag1'];
    $tag2 = $info['Tag2'];
    $tag3 = $info['Tag3'];
    $tag4 = $info['Tag4'];
    $tag5 = $info['Tag5'];
    $tag6 = $info['Tag6'];
    $tag7 = $info['Tag7'];
    $tag8 = $info['Tag8'];
    $tag9 = $info['Tag9'];
    $tag10 = $info['Tag10'];
}

echo $foto;
