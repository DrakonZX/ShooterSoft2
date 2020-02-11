<?php
  session_start();
  if (isset($_POST['cadas_email']) && isset($_POST['cadas_senha'])) {
    $sql = "select * from usuario where email='$_POST[cadas_email]'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount()==0) {
      $sql = "insert into usuario set email='$_POST[cadas_email]',senha='$_POST[cadas_senha]'";
      $sql = $pdo->query($sql);
      header("location:http://localhost/shooter_mvc/usuario/suaconta");
    }
  }
  else {
      $sql = "SELECT * FROM usuario WHERE email='$_POST[login_email]' and senha = '$_POST[login_senha]'";
      $sql = $pdo->query($sql);
      if ($sql->rowCount()>0) {
          $_SESSION['usuario'] = $_POST['login_email'];
          header("location:http://localhost/shooter_mvc/");
      }
    }
 ?>
