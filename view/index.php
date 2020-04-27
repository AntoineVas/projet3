<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil - Ciné0</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/index_view.css">
    <link rel="stylesheet" href="swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  </head>
  <body>

    <div class="">

      <header class="titre">

        <h1>Ciné0</h1>

      </header>

      <div class="nav">

        <nav>

          <a href="#">Accueil</a>
          <a href="#">Films</a>
          <a href="#">Réservation</a>
          <a href="#">Connexion</a>

        </nav>

      </div>

      <div class="films">

        <h1>A la Une !</h1>

        <div class="number">
          <?php

            $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
            $req = $bdd->query('SELECT img from show_films WHERE id=1');
            while($donnees = $req->fetch()) {
              echo ('<img style="<width: auto;height: auto;" src = "' . $donnees['img'] . '"/>');
            }

           ?><?php

             $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
             $req = $bdd->query('SELECT img from show_films WHERE id=2');
             while($donnees = $req->fetch()) {
               echo ('<img style="<width: auto;height: auto;" src = "' . $donnees['img'] . '"/>');
             }

            ?>
        </div>

      </div>

      <footer class="bas">

      </footer>

    </div>

  </body>
</html>
