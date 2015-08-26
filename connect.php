<?php
  $link = mysql_connect("localhost", "root", "usbw") or die ("Falha ao conectar ao servidor" . mysql_error());
  $bd = mysql_select_db("matchfood", $link) or die ("Falha ao conectar ao servidor" . mysql_error());
 ?>
