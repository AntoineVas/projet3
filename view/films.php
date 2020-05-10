<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Films</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/films_view.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.php">C1né0</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="films.php">Nos Films</a>
          <a class="nav-item nav-link" href="connexion_inscription.php">Connexion / Inscription</a>
      </div>
    </nav>

    <section class="films">
      <h1>NOS FILMS</h1>
      <div class="nos-films">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                NOS FILMS
              </div>
              <div class="card-body">
                <p class="card-text">
                  <?php
                    $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                    $req = $bdd->query('SELECT nom from films');
                    while($donnees = $req->fetch()) {
                      echo $donnees['nom']." "."<br/>";
                    }
                   ?>
                </p>
              </div>
            </div>
         </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                NOS CATEGORIES
              </div>
              <div class="card-body">
                <p class="card-text">
                  <div class="nb_horreur">
                    <?php
                      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                      foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Comédie"') as $row) {
                      echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Comédie</span> </br>" ;
                    }
                     ?>
                     <?php
                       $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                       foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Drame"') as $row) {
                       echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Drame</span> </br>" ;
                     }
                      ?>
                      <?php
                        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                        foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Western"') as $row) {
                        echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Western</span> </br>" ;
                      }
                       ?>
                       <?php
                         $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                         foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Policier"') as $row) {
                         echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Policier</span> </br>" ;
                       }
                        ?>
                        <?php
                          $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                          foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Fantastique"') as $row) {
                          echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Fantastique</span> </br>" ;
                        }
                         ?>
                         <?php
                           $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                           foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Horreur"') as $row) {
                           echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Horreur</span> </br>" ;
                         }
                          ?>
                          <?php
                            $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                            foreach($bdd->query('SELECT COUNT(*) FROM films WHERE categorie = "Catastrophe"') as $row) {
                            echo "Nous avons "."<span>".$row['COUNT(*)']."</span>"." film(s) dans la catégorie : <span>Catastrophe</span>" ;
                          }
                           ?>
                  </div>
                </p>
              </div>
            </div>
         </div>
       </div>
      </div>
    </section>

  </body>
</html>
