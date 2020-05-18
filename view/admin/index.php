<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Administration</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/index_admin_view.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.php">C1né0</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">MODIFICATION TENDANCES<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="films.php">MODIFICATION NOS FILMS</a>
          <a class="nav-item nav-link" href="reservation.php">RESERVATION</a>
          <a class="nav-item nav-link" href="user.php">USER</a>
          <a class="nav-item nav-link" href="../deconnexion.php">DECONNEXION</a>
      </div>
    </nav>

    <section class="tendances">
      <form class="" action="../../traitement/modification_tendancesTr.php" method="post">
        <input type="text" name="id" value="" placeholder="Numéro du film"><br><br>
        <input type="text" name="nom" value="" placeholder="Nom du film"><br><br>
        <input type="text" name="auteur" value="" placeholder="Auteur du film"><br><br>
        <input type="text" name="img" value="" placeholder="Lien JPG de l'image du film"><br><br>
        <input type="text" name="note" value="" placeholder="Note du film /5"><br><br>
        <input class="btn-submit" type="submit" name="" value="Modifier">
      </form>
    </section>

    <hr>

    <div class="show">
      <h3>Numéro 1</h3><?php  $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->query('SELECT nom from show_films WHERE id=1');
      while($donnees = $req->fetch()) {
        echo "<OPTION>".$donnees['nom']." "."<br/>";
      }?>
      <h3>Numéro 2</h3> <?php  $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->query('SELECT nom from show_films WHERE id=2');
      while($donnees = $req->fetch()) {
        echo "<OPTION>".$donnees['nom']." "."<br/>";
      }?>
      <h3>Numéro 3</h3> <?php  $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->query('SELECT nom from show_films WHERE id=3');
      while($donnees = $req->fetch()) {
        echo "<OPTION>".$donnees['nom']." "."<br/>";
      }?>
      <h3>Numéro 4</h3> <?php  $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->query('SELECT nom from show_films WHERE id=4');
      while($donnees = $req->fetch()) {
        echo "<OPTION>".$donnees['nom']." "."<br/>";
      }?>
    </div>

  </body>
</html>
