<?php

Class addFilms {

  private $nom;
  private $auteur;
  private $categorie;
  private $img;
  private $note;

  public function __construct($nom, $auteur, $categorie, $img, $note) {
    $this->setNom($nom);
    $this->setAuteur($auteur);
    $this->setCategorie($categorie);
    $this->setImg($img);
    $this->setNote($note);
  }

  public function getNom() { return $this->nom; }
  public function getAuteur() { return $this->auteur; }
  public function getCategorie() { return $this->categorie; }
  public function getImg() { return $this->img; }
  public function getNote() { return $this->note; }

  public function setNom($nom){
    $this->nom = $nom;
  }
  public function setAuteur($auteur){
    $this->auteur = $auteur;
  }
  public function setCategorie($categorie){
    $this->categorie = $categorie;
  }
  public function setImg($img){
    $this->img = $img;
  }
  public function setNote($note){
    $this->note = $note;
  }

}

 ?>
