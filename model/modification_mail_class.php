<?php

Class Modification_Mail{

    private $mail;
    private $mailexist;

    public function __construct($mail){
        $this->setMail($mail);
    }

    public function getMail(){ return $this->mail; }
    public function getMailexist(){ return $this->mailexist; }

    public function setMail($mail){
        $bdd= new PDO('mysql:host=localhost:3308;dbname=cinema;charset=utf8','root','');
        $reqmail = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
        $reqmail->execute(array($mail));
        $this->mailexist = $reqmail->rowCount();
        if($this->mailexist == 0){
            $this->mail = $mail;
            header('location: ../view/confirmation_modification.php');
        }else{
            header('location: ../error/erreur_mail.php');
        }
    }

}

 ?>
