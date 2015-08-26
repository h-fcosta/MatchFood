<?php
    include ("../connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserir Receitas - MatchFood</title>
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
                        <input name="FotoRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Nome Receita
                    </td>
                    <td>
                        <input name="NomeRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Tipo
                    </td>
                    <td>
                        <input name="TipoRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Origem
                    </td>
                    <td>
                        <input name="OrigemRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Ingredientes
                    </td>
                    <td>
                        <input name="IngRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Modo de Fazer
                    </td>
                    <td>
                        <input name="ModoRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Tags
                    </td>
                    <td>
                        <input name="TagsRec" type="text">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button name="enviar" value="insertRec">Enviar</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
