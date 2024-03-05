<?php

class Livre {
  private string $title;
  private int $pages;
  private int $annee;
  private float $price;
  private Auteur $auteur;
  
  public function __construct(
    string $title,
    int $pages,
    int $date,
    float $price,
    Auteur $auteur
    ) {
    $this->title = $title;
    $this->pages = $pages;
    $this->annee = $date;
    $this->price = $price;
    $this->auteur = $auteur;
    $this->auteur->addLivre($this);
    }
//  GETTERS & SETTERS
  public function getTitle() : string
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getPages() : int
  {
    return $this->pages;
  }
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  public function getAnnee() : int
  {
    return $this->annee;
  }
  public function setAnnee($annee)
  {
    $this->annee = $annee;
  }
  public function getPrice() : float
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function getAuteur() : Auteur
  {
    return $this->auteur;
  }
  public function setAuteur($auteur)
  {
    $this->auteur = $auteur;
  }
///////////////////////////////////////////
  public function __toString() {
    return "$this->title ($this->annee) : $this->pages pages /
    $this->price €<br>";
  }    
}