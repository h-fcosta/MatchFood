<?php
  $link = mysqli_connect("localhost", "root", "usbw");
  $bd = mysqli_select_db($link, "matchfood");

  if(mysqli_connect_errno()){
      echo "Falha na conexão com BD" . mysqli_connect_error();
  }else{
      echo "Conexão bem sucedida<br>";
  }
