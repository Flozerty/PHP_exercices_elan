<?php

class Titulaire {
  private string $nom;
  private string $prenom;
  private DateTime $dateNaissance;
  private string $ville;
  private array $comptes;
  public function __construct(
    string $nom,
    string $prenom,
    DateTime $dateNaissance,
    string $ville
    ) {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->dateNaissance = $dateNaissance;
      $this->ville = $ville;
      $this->comptes = [];
    }
/////////////////////////////////////////////:
  public function getComptes() : array
  {
    return $this->comptes;
  }
  public function setComptes(array $comptes)
  {
    $this->comptes = $comptes;
  }
  public function getVille() : string
  {
    return $this->ville;
  }
  public function setVille(string $ville)
  {
    $this->ville = $ville;
  }
  public function getDateNaissance() : DateTime
  {
    return $this->dateNaissance;
  }
  public function setDateNaissance(DateTime $dateNaissance)
  {
    $this->dateNaissance = $dateNaissance;
  }
  public function getPrenom() : string
  {
    return $this->prenom;
  }
  public function setPrenom(string $prenom)
  {
    $this->prenom = $prenom;
  }
  public function getNom() : string
  {
    return $this->nom;
  }
  public function setNom(string $nom)
  {
    $this->nom = $nom;
  }
}