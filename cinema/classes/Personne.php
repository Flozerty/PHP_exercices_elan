<?php

class Personne {
  private string $nom;
  private string $prenom;
  private string $sexe;
  private DateTime $dateNaissance;


  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    DateTime $dateNaissance,
  ) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->sexe = $sexe;
    $this->dateNaissance = $dateNaissance;
  }
  //////////GETTERS & SETTERS//////////////

  public function getDateNaissance()
  {
    return $this->dateNaissance;
  }
  public function setDateNaissance($dateNaissance)
  {
    $this->dateNaissance = $dateNaissance;
  }
  public function getSexe()
  {
    return $this->sexe;
  }
  public function setSexe($sexe)
  {
    $this->sexe = $sexe;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  public function setPrenom($prenom)
  {
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
  
}