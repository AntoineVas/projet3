<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>C1né0-Connexion / Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/connexion_inscription_view.css">
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
          <a class="nav-item nav-link active" href="connexion_inscription.php">Connexion / Inscription</a>
      </div>
    </nav>

    <section class="compte">
      <h1>Connexion / Inscription</h1>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              CONNEXION
            </div>
            <div class="card-body">
              <p class="card-text">
                <div class="formulaire">
                  <form class="" action="../traitement/connexionTr.php" method="post"><br><br>
                    <input type="email" name="mail" value="" placeholder="Mail"><br><br>
                    <input type="password" name="mdp" value="" placeholder="Mot de Passe"><br><br>
                    <input type="submit" class="btn-submit" name="" value="Connexion" placeholder=""><br><br>
                  </form>
                </div>
              </p>
            </div>
          </div>
       </div>
       <div class="col-sm-6">
         <div class="card">
           <div class="card-header">
             INSCRIPTION
           </div>
           <div class="card-body">
             <p class="card-text">
               <div class="formulaire">
                 <form class="" action="../traitement/inscriptionTr.php" method="post">
                   <input type="text" name="nom" value="" placeholder="Nom"><br><br>
                   <input type="text" name="prenom" value="" placeholder="Prénom"><br><br>
                   <input type="email" name="mail" value="" placeholder="Mail"><br><br>
                   <input type="password" name="mdp" value="" placeholder="Mot de Passe"><br><br>
                   <input type="submit" class="btn-submit" name="" value="Inscription" placeholder=""><br><br>
                 </form>
               </div>
             </p>
           </div>
         </div>
      </div>
      </div>
    </section>

  </body>
</html>
