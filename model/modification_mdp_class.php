<?php

Class Modification_Mdp{

    private $mdp;

    public function __construct($mdp){
        $this->setMdp($mdp);
    }

    public function getMdp(){ return $this->mdp; }

    public function setMdp($mdp){
        $this->mdp = sha1($mdp);
        header('location: ../view/confirmation_modification.php');

    }
}
