<?php
include("connect.php");

if(isset($_SESSION['login'])){
    header("Location: index.php");
}
echo hash('sha512', 'admin');

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