<?php
  if (isset($_POST['cadas_email']) && isset($_POST['cadas_senha'])) {
    $sql = "select * from usuario where email='$_POST[cadas_email]'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount()==0) {
      $sql = "insert into usuario set email='$_POST[cadas_email]',senha='$_POST[cadas_senha]'";
      $sql = $pdo->query($sql);
    }
  }
  else {
    if (isset($_POST['login_email']) && isset($_POST['login_senha'])) {
      $sql = "select * from usuario where email='$_POST[login_email]'";
      $sql = $pdo->query($sql);
      if ($sql->rowCount()>0) {
        foreach ($sql->fetchAll() as $usuario) {
          if ($_POST['login_email'] == $usuario['email'] && $_POST['login_senha'] == $usuario['senha']) {
            session_start();
            $_SESSION['usuario'] = $_POST['login_email'];
            header("location:http://localhost/shooter_mvc/");
          }
        }
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur|Merriweather+Sans|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/shooter_mvc/assets/css/master.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <header>
    <img src="http://localhost/shooter_mvc/assets/img/logo_veridico.png" alt="">
  </header>
  <body>
    <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                      <form method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *"  name="login_email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="login_senha" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="btnForgetPwd">Forget Password?</a>
                        </div>
                      </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    </div>
                    <h3>Cadastro</h3>
                      <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" name="cadas_email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name="cadas_senha" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="btnForgetPwd" value="Login">Forget Password?</a>
                        </div>
                      </form>
                </div>
            </div>
        </div>
  </body>
</html>
