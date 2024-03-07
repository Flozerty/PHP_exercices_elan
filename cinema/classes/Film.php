<?php

class Film {

private string $titre;
private DateTime $dateSortie;
private int $duree;
private string $synopsis;

public function __construct(
  string $titre,
  DateTime $dateSortie,
  int $duree,
  string $synopsis,
  ) {
    $this->titre = $titre;
    $this->dateSortie = $dateSortie;
    $this->duree = $duree;
    $this->synopsis = $synopsis;
  }
  //////////GETTERS & SETTERS//////////////

  public function getSynopsis()
  {
  return $this->synopsis;
  }
  public function setSynopsis($synopsis)
  {
  $this->synopsis = $synopsis;
  }
  
  public function getDuree()
  {
  return $this->duree;
  }
  public function setDuree($duree)
  {
  $this->duree = $duree;
  }

  public function getDateSortie()
  {
  return $this->dateSortie;
  }
  public function setDateSortie($dateSortie)
  {
  $this->dateSortie = $dateSortie;
  }
  public function getTitre()
  {
  return $this->titre;
  }
  public function setTitre($titre)
  {
  $this->titre = $titre;
  }
  
}