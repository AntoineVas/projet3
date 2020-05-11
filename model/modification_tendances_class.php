<?php

Class modificationTendances{

  private $id;
  private $nom;
  private $auteur;
  private $img;
  private $note;

  public function __construct($id, $nom, $auteur, $img, $note) {
    $this->setId($id);
    $this->setNom($nom);
    $this->setAuteur($auteur);
    $this->setImg($img);
    $this->setNote($note);
  }

  public function getId() { return $this->id; }
  public function getNom() { return $this->nom; }
  public function getAuteur() { return $this->auteur; }
  public function getImg() { return $this->img; }
  public function getNote() { return $this->note; }

  public function setId($id){
    $this->id = $id;
  }
  public function setNom($nom){
    $this->nom = $nom;
  }
  public function setAuteur($auteur){
    $this->auteur = $auteur;
  }
  public function setImg($img){
    $this->img = $img;
  }
  public function setNote($note){
    $this->note = $note;
  }

}

 ?>
