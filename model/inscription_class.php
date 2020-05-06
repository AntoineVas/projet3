<?php

Class Inscription{

    private $nom;
    private $prenom;
    private $age;
    private $mail;
    private $mdp;

    public function __construct($nom, $prenom, $age, $mail, $mdp, $mdp2){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setMail($mail);
        $this->setMdp($mdp, $mdp2);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getAge(){ return $this->age; }
    public function getMail(){ return $this->mail; }
    public function getMdp(){ return $this->mdp; }

    public function setNom($nom){
        $nomlength = strlen($nom);
        if($nomlength < 75){
            $this->nom = $nom;
        }else{
            echo 'Caractère maximum du nom = 75';
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

    public function setAge($age){
        if($age > 0 && $age < 120){
            $this->age = $age;
        }else{
            echo 'Merci de saisir votre age !';
        }
    }

    public function setMail($mail){
        $bdd= new PDO('mysql:host=localhost;dbname=project;charset=utf8','root','');
        $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if($mailexist == 0){
            $this->mail = $mail;
        }else{
            echo 'Mail déjà utiliser !';
        }
    }

    public function setMdp($mdp, $mdp2){
        if($mdp == $mdp2){
            $this->mdp = sha1($mdp);
        }else{
            echo 'Les Mdp ne correspondent pas !';
        }
    }

}