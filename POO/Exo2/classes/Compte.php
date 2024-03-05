<?php

class Compte {
  private string $libelle;
  private float $solde;
  private string $devise;
  private Titulaire $titulaire;

  public function __construct(
    string $libelle,
    float $solde,
    string $devise,
    Titulaire $titulaire,
  ) {
    $this->libelle = $libelle;
    $this->solde = $solde;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
    $this->titulaire->addCompte($this);
  }
//////////////////////////////////////////
  public function getTitulaire() : Titulaire
  {
    return $this->titulaire;
  }
  public function setTitulaire(Titulaire $titulaire)
  {
    $this->titulaire = $titulaire;
  }
  public function getDevise() : string
  {
    return $this->devise;
  }
  public function setDevise(string $devise)
  {
    $this->devise = $devise;
  }
  public function getSolde() : float
  {
    return $this->solde;
  }
  public function setSolde(float $solde)
  {
    $this->solde = $solde;
  }
  public function getLibelle() : string
  {
    return $this->libelle;
  }
  public function setLibelle(string $libelle)
  {
    $this->libelle = $libelle;
  }
  ///////////////////////////////////////////

  public function crediter(float $number): string {
    $this->setSolde($this->solde + $number);
    return "crédit de $number $this->devise effectué sur le $this->libelle de $this->titulaire. Nouveau solde : $this->solde $this->devise<br>";
  }
  public function debiter(float $number) {
    $this->setSolde($this->solde - $number);
    return "débit de $number $this->devise effectué sur le $this->libelle de $this->titulaire. Nouveau solde : $this->solde $this->devise<br>";
  }

  public function __toString() {
    return "<b>$this->libelle de $this->titulaire.</b> Solde : $this->solde $this->devise<br>";
  }
}