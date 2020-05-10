<?php

Class Inscription{

    private $nom;
    private $prenom;
    private $mail;
    private $mdp;

    public function __construct($nom, $prenom, $mail, $mdp){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setMdp($mdp);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getMail(){ return $this->mail; }
    public function getMdp(){ return $this->mdp; }

    public function setNom($nom){
        $nomlength = strlen($nom);
        if($nomlength < 75){
            $this->nom = $nom;
        }else{
            header('location: ../error/mdp_user.php');
        }
    }

    public function setPrenom($prenom){
        $prenomlength = strlen($prenom);
        if($prenomlength < 75){
            $this->prenom = $prenom;
        }else{
            echo 'Caractère maximum du prénom = 75';
        }
    }

    public function setMail($mail){
        $bdd= new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
        $reqmail = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if($mailexist == 0){
            $this->mail = $mail;
        }else{
            header('location: ../error/mdp_user.php');
        }
    }

    public function setMdp($mdp){
        $this->mdp = sha1($mdp);
    }

}
