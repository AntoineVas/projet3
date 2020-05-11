<?php
session_start();

Class Manager {

    public function connexion($connex){
        $bdd= new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM user WHERE mail=:mail AND mdp=:mdp');
        $reponse->execute(array(
        'mail'=>$connex->getMail(),
        'mdp'=>$connex->getMdp()));
        $donne=$reponse->fetch();

        if ($donne['mail'] == $connex->getMail() && $donne['mdp'] == $connex->getMdp()){
            $_SESSION['id'] = $donne['id'];
            $_SESSION['nom'] = $donne['nom'];
            $_SESSION['prenom'] = $donne['prenom'];
            $_SESSION['mail'] = $donne['mail'];
            $_SESSION['mdp'] = $donne['mdp'];
            $_SESSION['role'] = $donne['role'];
            if($_SESSION['role'] == 1){
                header('location: ../view/admin/index.php');
            }
            else{
                header('location: ../view/login/index.php');
            }

        }
        else{
            header('location: ../error/connexion_user.php');
        }
    }

    public function inscription($ins){
        $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO user(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
        $req->execute(array('nom'=>$ins->getNom(), 'prenom'=>$ins->getPrenom(), 'mail'=>$ins->getMail(), 'mdp'=>$ins->getMdp()));
    }

    public function reservation($res){
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->prepare('INSERT INTO reservation(id_client, nom_client, prenom_client, mail_client, films, date) VALUES(:id_client, :nom_client, :prenom_client, :mail_client, :films, :date)');
      $req->execute(array(
        'id_client'=>$res->getId(),
        'nom_client'=>$res->getNom(),
        'prenom_client'=>$res->getPrenom(),
        'mail_client'=>$res->getMail(),
        'films'=>$res->getFilms(),
        'date'=>$res->getDate()
      ));
      header('location: ../view/login/confirmation.php');
    }

    public function modification_mail($mch){
        $bdd = new PDO('mysql:host=localhost:3308; dbname=cinema; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $mail = $mch->getMail();
        if($mch->getMailexist() == 0){
            $req = $bdd->prepare('UPDATE user SET mail=:mail WHERE id=:id');
            $req->execute(array(
            'mail'=>$mch->getMail(),
            'id'=>$id
            ));
        }
    }

    public function modification_mdp($mdpch){
        $bdd = new PDO('mysql:host=localhost:3308; dbname=cinema; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $mdp = $mdpch->getMdp();

        $req = $bdd->prepare('UPDATE user SET mdp=:mdp WHERE id=:id');
        $req->execute(array(
            'mdp'=>$mdpch->getMdp(),
            'id'=>$id
        ));
    }

    public function add_films($add){
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->prepare('INSERT INTO films(nom, auteur, categorie, img, note) VALUES(:nom, :auteur, :categorie, :img, :note)');
      $req->execute(array('nom'=>$add->getNom(), 'auteur'=>$add->getAuteur(), 'categorie'=>$add->getCategorie(), 'img'=>$add->getImg(), 'note'=>$add->getNote()));
      header('location: ../view/admin/films.php');
    }

    public function delete_films($del){
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->prepare('DELETE FROM films WHERE films.id = :id;');
      $req->execute(array('id'=>$del->getId()));
      header('location: ../view/admin/films.php');
    }

    public function modification_tendances($mod){
      $bdd = new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
      $req = $bdd->prepare('UPDATE show_films SET nom=:nom, auteur=:auteur, img=:img, note=:note WHERE id=:id');
      $req->execute(array(
          'id'=>$mod->getId(),
          'nom'=>$mod->getNom(),
          'auteur'=>$mod->getAuteur(),
          'img'=>$mod->getImg(),
          'note'=>$mod->getNote(),
      ));
      header('location: ../view/admin/index.php');
    }

}
 ?>
