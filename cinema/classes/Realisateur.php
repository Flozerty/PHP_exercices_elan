<?php

class Realisateur extends Personne {
  private string $biographie;
  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    DateTime $dateNaissance,
    string $biographie,
  ) {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->biographie = $biographie;
  }
  //////////GETTERS & SETTERS//////////////
  public function getBiographie()
  {
    return $this->biographie;
  }
  public function setBiographie($biographie)
  {
    $this->biographie = $biographie;
  }
}