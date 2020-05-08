<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/inscription_view.css">
  </head>
  <body>

    <header class="container-fluid header">
      <div class="container-fluid">
        <div class="titre">
          <h1>C1né0</h1>
        </div>
        <div class="navigation">
          <a href="javascript:history.go(-1)"><i class="fas fa-undo-alt"></i> Retour</a>
        </div>
      </div>
    </header>

    <div class="formulaire">
      <form class="" action="../traitement/inscriptionTr.php" method="post">
        <input type="text" name="nom" value="" placeholder="Nom"><br><br>
        <input type="text" name="prenom" value="" placeholder="Prénom"><br><br>
        <input type="email" name="mail" value="" placeholder="Mail"><br><br>
        <input type="password" name="mdp" value="" placeholder="Mot de Passe"><br><br>
        <input type="submit" class="btn-submit" name="" value="Inscription" placeholder=""><br><br>
        <a href="connexion.php">J'ai un compte - Connexion</a>
      </form>
    </div>

  </body>
</html>
