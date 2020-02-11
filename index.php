<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require 'config.php';
require 'model/usuario.php';
$sub = substr($url,29);
$sub2 = substr($url,32);
  if ($sub == "usuario/suaconta" || $sub == "home/usuario/suaconta" || $sub == "usuario/suaconta/" || $sub == "home/usuario/suaconta/") {
    require 'view/usuario_temp.php';
  }
  elseif ($sub == "" || $sub == "home") {
    require 'template.php';
  }
  elseif (isset($_GET['k']) && !empty($_GET['k'])) {
    require 'model/usuario.php';
  }
  elseif ($sub=="usuario/suaconta/valida" || $sub="usuario/suaconta/valida" || $sub=="usuario/suaconta/valida/" || $sub="usuario/suaconta/valida/") {
    require 'controller/valida.php';
  }
 ?>
