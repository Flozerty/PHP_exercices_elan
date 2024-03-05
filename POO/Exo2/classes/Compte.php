<?php

class Compte {
  private string $libelle;
  private float $solde;
  private string $devise;
  private Titulaire $titulaire;

  public function __construct(
    string $libelle,
    string $devise,
    Titulaire $titulaire,
  ) {
    $this->libelle = $libelle;
    $this->solde = 0;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
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
}