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
    string $dateNaissance, // conversion de string à DateTime dans le constructeur
    string $ville
    ) {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->dateNaissance = new DateTime($dateNaissance);
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
/////////////////////////////////////////////////
  public function addCompte(Compte $compte) {
    $this->comptes[] = $compte;
  }

  public function getAge() : int {
    // On retourne l'année de différence entre dateNaissance et Ajd
    $dateNow = new DateTime();
    $diffAge = $this->getDateNaissance()->diff($dateNow);
    return $diffAge->y; 
  }

  public function getInfos() {
     $result ="<div><h1>$this</h1>
     localisation :".$this->getVille()."<br> 
     âge : ".$this->getAge()." ans<br>
     Comptes existants :<br><ul>";

    foreach($this->comptes as $compte){
      $result .= "<li>$compte</li>";
    }
    return "$result </ul></div>";
  }

  public function __toString() {
    return ucfirst($this->getNom())." ".ucfirst($this->getPrenom());
  }
}