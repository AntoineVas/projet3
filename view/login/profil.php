<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Mon Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/profil_view.css">
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
          <a class="nav-item nav-link" href="films.php">Nos Films</a>
          <a class="nav-item nav-link" href="reservation.php">Réservation</a>
          <a class="nav-item nav-link active" href="profil.php">Mon Profil</a>
          <a class="nav-item nav-link" href="../deconnexion.php">Déconnexion</a>
      </div>
    </nav>

    <div class="profil">
      <h1>Gestion de Profil</h1>
      <h3>Votre Nom <?php echo $_SESSION['nom']; ?> (Non modifiable)</h3>
      <h3>Votre Prenom <?php  echo $_SESSION['prenom']; ?> (Non modifiable)</h3>
      <h3>Votre e-Mail <?php  echo $_SESSION['mail']; ?><a href="modification_mail.php">     <button type="button" class="btn btn-custom">Modification</button></a></h3>
      <h3>Votre MDP (Cryptée)<?php  echo $_SESSION['mdp']; ?><a href="modification_mdp.php">     <button type="button" class="btn btn-custom">Modication</button></a></h3>

      <h1>Mes Réservations</h1>
      <h3><?php
                $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
                $req = $bdd->prepare('SELECT * FROM reservation WHERE id_client=:id');
                $req->execute(array(
                    'id'=>$_SESSION['id']
                ));
                $donne=$req->fetch();
                if($donne['id_client'] == $_SESSION['id']){
                    echo 'Vous avez une réservation en cour !';
                    $sea = $bdd->query('SELECT films, date from reservation WHERE id_client ='.$_SESSION['id'].'');
                    while($donnees = $sea->fetch()) {
                      echo "<br>".$donnees['films']."<br>".$donnees['date'];
                    }

                }else{
                    echo "Vous n'avez aucune réservation en cour !";
                }
            ?></h3>
    </div>

    <div class="help">
      <h4>Votre nom et prénom sont non modifiable, en cas de soucis merci de contacter l'administrateur du site web</h4>
      <h4>Si vous modifiez votre e-mail ou mot de passe vous devrez vous reconnecter</h4>
    </div>

  </body>
</html>
