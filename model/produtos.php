<?php
    if ($sub == "" || $sub == "home" || $sub == "home/") {
      $sql = "select * from produtos_airsoft";
    }
    elseif ($sub == "airsoft" || $sub == "home/airsoft" || $sub == "airsoft/" || $sub == "home/airsoft/") {
      $sql = "select * from produtos_airsoft where tipo='Airsoft'";
    }
    elseif ($sub == "paintball" || $sub == "home/paintball" || $sub == "paintball/" || $sub == "home/paintball/") {
      $sql = "select * from produtos_airsoft where tipo='Paintball'";
    }
    elseif ($sub == "arquearia" || $sub == "home/arquearia" || $sub == "arquearia/" || $sub == "home/arquearia/") {
      $sql = "select * from produtos_airsoft where tipo='Arquearia'";
    }
    elseif ($sub == "airsoft/pistolas" || $sub == "home/airsoft/pistolas" || $sub == "airsoft/pistolas/" || $sub == "home/airsoft/pistolas/") {
      $sql = "select * from produtos_airsoft where categoria='Pistolas'";
    }
    elseif ($sub == "airsoft/escopetas" || $sub == "home/airsoft/escopetas" || $sub == "airsoft/escopetas/" || $sub == "home/airsoft/escopetas/") {
      $sql = "select * from produtos_airsoft where categoria='Escopetas'";
    }
    elseif ($sub == "airsoft/rifles" || $sub == "home/airsoft/rifles" || $sub == "airsoft/rifles/" || $sub == "home/airsoft/rifles/") {
      $sql = "select * from produtos_airsoft where categoria='Rifles'";
    }
 ?>
