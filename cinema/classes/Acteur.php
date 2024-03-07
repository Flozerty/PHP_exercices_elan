<?php

class Acteur extends Personne {
  private $photo;

  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    DateTime $dateNaissance,
    $photo,
  ) {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->photo = $photo;
  }
  //////////GETTERS & SETTERS//////////////
  public function getPhoto()
  {
    return $this->photo;
  }
  public function setPhoto($photo)
  {
    $this->photo = $photo;
  }
  
}