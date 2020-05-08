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
                header('');
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
        header('location: ../view/login/index.php');
    }


    public function modification_nom($nch){
        $bdd = new PDO('mysql:host=localhost; dbname=project; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $nom = $nch->getNom();

        $req = $bdd->prepare('UPDATE utilisateur SET nom=:nom WHERE id=:id');
        $req->execute(array(
            'nom'=>$nch->getNom(),
            'id'=>$id
        ));
    }

    public function modification_prenom($pch){
        $bdd = new PDO('mysql:host=localhost; dbname=project; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $prenom = $pch->getPrenom();

        $req = $bdd->prepare('UPDATE utilisateur SET prenom=:prenom WHERE id=:id');
        $req->execute(array(
            'prenom'=>$pch->getPrenom(),
            'id'=>$id
        ));
    }

    public function modification_mail($mch){
        $bdd = new PDO('mysql:host=localhost; dbname=project; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $mail = $mch->getMail();
        if($mch->getMailexist() == 0){
            $req = $bdd->prepare('UPDATE utilisateur SET mail=:mail WHERE id=:id');
            $req->execute(array(
            'mail'=>$mch->getMail(),
            'id'=>$id
            ));
        }
    }

    public function modification_age($ach){
        $bdd = new PDO('mysql:host=localhost; dbname=project; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $age = $ach->getAge();

        $req = $bdd->prepare('UPDATE utilisateur SET age=:age WHERE id=:id');
        $req->execute(array(
            'age'=>$ach->getAge(),
            'id'=>$id
        ));
    }

    public function modification_mdp($mdpch){
        $bdd = new PDO('mysql:host=localhost; dbname=project; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $mdp = $mdpch->getMdp();

        $req = $bdd->prepare('UPDATE utilisateur SET mdp=:mdp WHERE id=:id');
        $req->execute(array(
            'mdp'=>$mdpch->getMdp(),
            'id'=>$id
        ));
    }

}
 ?>
