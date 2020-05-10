<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/index_view.css">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.php">C1né0</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="films.php">Nos Films</a>
          <a class="nav-item nav-link" href="reservation.php">Réservation</a>
          <a class="nav-item nav-link" href="profil.php">Mon Profil</a>
          <a class="nav-item nav-link" href="../deconnexion.php">Déconnexion</a>
      </div>
    </nav>




      <section class="films">
        <h1>FILMS TENDANCES</h1>
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <div class="text">
                  <p class="card-text">

                    <!-- GET IMG -->
                    <?php
                      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                      $req = $bdd->query('SELECT img from show_films WHERE id=1');
                      while($donnees = $req->fetch()) {
                        echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
                      }
                     ?>
                     <!-- GET NOM -->
                     <h3><?php
                       $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                       $req = $bdd->query('SELECT nom from show_films WHERE id=1');
                       while($donnees = $req->fetch()) {
                         echo $donnees['nom'];
                       }
                      ?><h3>
                      <!-- GET AUTEUR -->
                      <h4><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT auteur from show_films WHERE id=1');
                        while($donnees = $req->fetch()) {
                          echo $donnees['auteur'];
                        }
                       ?><h4>
                      <!-- GET NOTES -->
                      <h3><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT note from show_films WHERE id=1');
                        while($donnees = $req->fetch()) {
                          echo $donnees['note'];
                        }
                       ?><i class="fas fa-star"></i><h3>

                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <div class="text">
                  <p class="card-text">

                    <!-- GET IMG -->
                    <?php
                      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                      $req = $bdd->query('SELECT img from show_films WHERE id=2');
                      while($donnees = $req->fetch()) {
                        echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
                      }
                     ?>
                     <!-- GET NOM -->
                     <h3><?php
                       $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                       $req = $bdd->query('SELECT nom from show_films WHERE id=2');
                       while($donnees = $req->fetch()) {
                         echo $donnees['nom'];
                       }
                      ?><h3>
                      <!-- GET AUTEUR -->
                      <h4><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT auteur from show_films WHERE id=2');
                        while($donnees = $req->fetch()) {
                          echo $donnees['auteur'];
                        }
                       ?><h4>
                      <!-- GET NOTES -->
                      <h3><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT note from show_films WHERE id=2');
                        while($donnees = $req->fetch()) {
                          echo $donnees['note'];
                        }
                       ?><i class="fas fa-star"></i><h3>

                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <div class="text">
                  <p class="card-text">

                    <!-- GET IMG -->
                    <?php
                      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                      $req = $bdd->query('SELECT img from show_films WHERE id=3');
                      while($donnees = $req->fetch()) {
                        echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
                      }
                     ?>
                     <!-- GET NOM -->
                     <h3><?php
                       $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                       $req = $bdd->query('SELECT nom from show_films WHERE id=3');
                       while($donnees = $req->fetch()) {
                         echo $donnees['nom'];
                       }
                      ?><h3>
                      <!-- GET AUTEUR -->
                      <h4><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT auteur from show_films WHERE id=3');
                        while($donnees = $req->fetch()) {
                          echo $donnees['auteur'];
                        }
                       ?><h4>
                      <!-- GET NOTES -->
                      <h3><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT note from show_films WHERE id=3');
                        while($donnees = $req->fetch()) {
                          echo $donnees['note'];
                        }
                       ?><i class="fas fa-star"></i><h3>

                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <div class="text">
                  <p class="card-text">

                    <!-- GET IMG -->
                    <?php
                      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                      $req = $bdd->query('SELECT img from show_films WHERE id=4');
                      while($donnees = $req->fetch()) {
                        echo ('<img style="<width: 255px;height: 355px;" src = "' . $donnees['img'] . '"/>');
                      }
                     ?>
                     <!-- GET NOM -->
                     <h3><?php
                       $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                       $req = $bdd->query('SELECT nom from show_films WHERE id=4');
                       while($donnees = $req->fetch()) {
                         echo $donnees['nom'];
                       }
                      ?><h3>
                      <!-- GET AUTEUR -->
                      <h4><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT auteur from show_films WHERE id=4');
                        while($donnees = $req->fetch()) {
                          echo $donnees['auteur'];
                        }
                       ?><h4>
                      <!-- GET NOTES -->
                      <h3><?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        $req = $bdd->query('SELECT note from show_films WHERE id=4');
                        while($donnees = $req->fetch()) {
                          echo $donnees['note'];
                        }
                       ?><i class="fas fa-star"></i><h3>

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </body>
</html>
