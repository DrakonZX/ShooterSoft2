<?php
  if (isset($_GET['k']) && !empty($_GET['k'])) {
    $deco = base64_decode($_GET['k']);
    $usuario = $deco;
    header("location:http://localhost/shooter_mvc/");
  }
 ?>
