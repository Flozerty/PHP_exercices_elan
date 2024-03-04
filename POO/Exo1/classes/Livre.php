<?php

class Livre {
  private string $title;
  private int $pages;
  private int $date;
  private $price;
  private Auteur $auteur;
  
  public function __construct(
    string $title,
    int $pages,
    int $date,
    int $price,
    Auteur $auteur
    ) {
    $this->title = $title;
    $this->pages = $pages;
    $this->date = $date;
    $this->price = $price;
    $this->auteur = $auteur;
    }
//  GETTERS & SETTERS
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getPages()
  {
    return $this->pages;
  }
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  public function getDate()
  {
    return $this->date;
  }
  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function getAuteur()
  {
    return $this->auteur;
  }
  public function setAuteur($auteur)
  {
    $this->auteur = $auteur;
  }
// 
  public function __toString() {
    return "$this->title ($this->date) : $this->pages pages /
    $this->price € $this->auteur";
  }

    
}