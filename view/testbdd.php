<?php

  $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
  $req = $bdd->query('SELECT img from show_films WHERE id=1');
  while($donnees = $req->fetch()) {
    echo ('<img style="<width: auto;height: auto;" src = "' . $donnees['img'] . '"/>');
  }

 ?>
