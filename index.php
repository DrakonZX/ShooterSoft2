<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require 'config.php';
$sub = substr($url,29);
  if ($sub == "usuario/suaconta" || $sub == "home/usuario/suaconta" || $sub == "usuario/suaconta" || $sub == "home/usuario/suaconta") {
    require 'view/usuario_temp.php';
  }
  else {
    if (isset($sub)) {
      require 'template.php';
    }
  }
 ?>
