<?php

class Auteur {
  private string $nom;
  private string $prenom;
  private array $livres;

  public function __construct(
    string $nom,
    string $prenom,
  ) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->livres = [];
  }
  public function getNom() : string
  {
    return $this->nom;
  } 
  public function setNom($nom)
  {
    $this->nom = $nom;
  }
  public function getPrenom() : string
  {
    return $this->prenom;
  }
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }
  public function getLivres() : array
  {
    return $this->livres;
  }
  public function setLivres($livres)
  {
    $this->livres = $livres;
  }
  
///////////////////////////////////
  public function __toString() {
    return "$this->nom $this->prenom";
  }
  
  public function addLivre(Livre $Livre) {
    $this->livres[] = $Livre;
  }
  
  function afficherBibliographie() {
    $result = "<h1>Livres de $this :</h1>";
    foreach($this->livres as $liv) {
      $result .= $liv;
    }
    return $result;
  }
}