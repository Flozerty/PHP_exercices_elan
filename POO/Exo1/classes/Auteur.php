<?php

class Auteur {
  private $nom;
  private $prenom;

  public function __construct(
    string $nom,
    string $prenom
  ) {
    $this->nom = $nom;
    $this->prenom = $prenom;
  }

  public function getNom()
  {
      return $this->nom;
  } 
  public function setNom($nom)
  {
      $this->nom = $nom;
  }
  public function getPrenom()
  {
      return $this->prenom;
  } 
  public function setPrenom($prenom)
  {
      $this->prenom = $prenom;
  }

  public function __toString() {
    return "$this->nom $this->prenom";
  }
}