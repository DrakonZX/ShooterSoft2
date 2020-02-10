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
    <title>Home</title>
  </head>
  <body>
      <header>
        <img src="http://localhost/shooter_mvc/assets/img/logo_veridico.png" alt="">
        <a href="http://localhost/shooter_mvc/usuario/suaconta">Login</a>
      </header>
      <div class="menu">
        <a href="http://localhost/shooter_mvc/home">Home</a>
        <a href="http://localhost/shooter_mvc/arquearia">Arquearia</a>
        <a href="http://localhost/shooter_mvc/paintball">Paintball</a>
        <div class="dropdown">
          <a href="airsoft"><button  style="cursor:pointer;" class="dropbtn">Airsoft</button></a>
          <div class="dropdown-content">
            <a href="http://localhost/shooter_mvc/airsoft/pistolas">Pistolas</a>
            <a href="http://localhost/shooter_mvc/airsoft/rifles">Rifles</a>
            <a href="http://localhost/shooter_mvc/airsoft/escopetas">Escopetas</a>
          </div>
        </div>
      </div>
        <!--Slider -->
        <div class="slide">
          <p>Slide</p>
        </div>
        <!-- Slider -->
    <div class="produtos">
      <?php
        if (!isset($_GET['np']) && empty($_GET['np']) && !isset($_GET['nu']) && empty($_GET['nu'])) {
          require 'model/produtos.php';
          $sql = $pdo->query($sql);
          if ($sql->rowCount()>0) {
            foreach ($sql -> fetchAll() as $produtos) {
              ?>
              <div class="itens">
              <div class="item2">
                <a href="http://localhost/shooter_mvc/<?php echo strtolower($produtos['tipo'])."/".strtolower($produtos['categoria'])."/?np=".$produtos['nome'] ?>"><img class="card-img-top" src="http://localhost/shooter_mvc/assets/<?php echo $produtos['img']; ?>"></a>
                <div class="card-body">
                  <h3  class="card-title"><?php echo $produtos['nome'] ?></h3>
                  <p class="card-text" id="preco_avista" ><?php echo "<span style ='font-size:18px;'>R$ ".$produtos['avista']."</span><span style='color:green;'> à vista no boleto</span>" ?></p>
                  <p  class="card-text" id="preco_parcelas"><?php echo "ou <span style='color:green;'>13x</span> de "."<span style='color:green;'>".$produtos['parcelas']."</span>" ?></p>
                  <div class="item_links">
                      <a class="comp" href="pagina_all.php?id=<?php echo $produtos['id'] ?>" role="button">Comprar</a>
                      <a class="fav" style="cursor:pointer" onclick="adicionado()" href="favorito.php?id=<?php echo $produtos['id'] ?>&caminho=<?php echo $url ?>" id="link"  name="favorito"><i class="fas fa-cart-plus"></i></a><br><br>
                  </div>
              </div>
              </div>
              </div>
              <?php
            }
          }
        }
      ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
