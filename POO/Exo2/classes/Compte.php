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
    $this->solde += $number;
    return "crédit de $number $this->devise effectué sur le $this. Nouveau solde : $this->solde $this->devise<br>";
  }
  public function debiter(float $number): string {
    $this->solde -= $number;
    return "débit de $number $this->devise effectué sur le $this. Nouveau solde : $this->solde $this->devise<br>";
  }

  public function virement(float $number, Compte $compte): string {
    $this->debiter($number);
    $compte->crediter($number);

    return "Virement de $number effectué du $this au $compte.<br>
    Nouveau solde du $this : ".$this->getSolde()."<br>Nouveau solde du $compte : ".$compte->getSolde();
  }
  
///////////////////////
  public function getInfos(): string {
    return "<b>$this</b> - Solde : $this->solde $this->devise<br>";
  }

  public function __toString() {
    return "$this->libelle de $this->titulaire";
  }
}