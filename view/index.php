<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil - C1né0</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/index_view.css">
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="">

      <header class="titre">

        <h1>C1né0</h1>

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
              echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
            }

           ?><?php

             $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
             $req = $bdd->query('SELECT img from show_films WHERE id=2');
             while($donnees = $req->fetch()) {
               echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
             }

            ?><?php

              $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
              $req = $bdd->query('SELECT img from show_films WHERE id=3');
              while($donnees = $req->fetch()) {
                echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
              }

             ?><?php

               $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
               $req = $bdd->query('SELECT img from show_films WHERE id=4');
               while($donnees = $req->fetch()) {
                 echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
               }

              ?>
        </div>

      </div>

      <footer class="bas">

      </footer>

    </div>

  </body>
</html>
