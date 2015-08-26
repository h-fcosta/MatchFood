<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php">HOME</a>
         <form method="post" action="action.php">
            <table>
                <tr>
                    <td>
                        Foto
                    </td>
                    <td>
                        <input name="FotoIng" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Ingrediente
                    </td>
                    <td>
                        <input name="NomeIng" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Categoria
                    </td>
                    <td>
                        <input name="CatIng" type="text">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button name="enviar" value="insertIng">Enviar</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
