<?php

Class Reservation {

  private $id;
  private $nom;
  private $prenom;
  private $mail;
  private $date;
  private $film;

  public function __construct($id, $nom, $prenom, $mail, $date, $film){
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setDate($date);
        $this->setFilm($film);
    }

    public function getId(){ return $this->id; }
    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getMail(){ return $this->mail; }
    public function getDate(){ return $this->date; }
    public function getFilms(){ return $this->film; }

    public function setId($id){
      $this->id = $id;
    }

    public function setNom($nom){
      $this->nom = $nom;
    }

    public function setPrenom($prenom){
      $this->prenom = $prenom;
    }

    public function setMail($mail){
      $this->mail = $mail;
    }

    public function setDate($date){
      $this->date = $date;
    }

    public function setFilm($film){
      $this->film = $film;
    }

}

 ?>
