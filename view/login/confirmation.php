<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Confirmation</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/confirmation_view.css">
  </head>
  <body>

  <div class="text">
    <h1>Vous venez de réserver le film : <?php
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $search = $_SESSION['id'];
      $req = $bdd->query('SELECT films from reservation WHERE id_client ='.$_SESSION['id'].'');
      while($donnees = $req->fetch()) {
        echo $donnees['films']."<br>";
      }
     ?></h1>
    <h1>Pour le : <?php
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $search = $_SESSION['id'];
      $req = $bdd->query('SELECT date from reservation WHERE id_client ='.$_SESSION['id'].'');
      while($donnees = $req->fetch()) {
        echo $donnees['date']."<br>";
      }
     ?></h1>
    <h1>Au nom : <?php
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $search = $_SESSION['id'];
      $req = $bdd->query('SELECT nom_client from reservation WHERE id_client ='.$_SESSION['id'].'');
      while($donnees = $req->fetch()) {
        echo $donnees['nom_client']."<br>";
      }
     ?></h1>

     <a href="index.php"><button type="button" class="btn btn-custom">Retour à l'accueil</button></a>
  </div>

  </body>
</html>
