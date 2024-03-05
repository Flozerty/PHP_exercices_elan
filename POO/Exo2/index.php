<?php

spl_autoload_register(function ($class_name) {
  require 'classes/'. $class_name .'.php';}
);

$titulaires = [
  $floris = new Titulaire('louerat','floris','1995-07-03','Strasbourg'),
  $bertrand = new Titulaire('cocu','bertrand','1986-01-06','Tintouin-Ville'),
  $maurice = new Titulaire('andouille','maurice','1946-07-28','Sainte-Verge'),
  $bernard = new Titulaire('lagaffe','bernard','1957-10-12','Montcuq'),
  $gilbert = new Titulaire('perdu','gilbert','1939-05-30','Trécon'),
];

$comptes = [
  $ccFloris = new Compte("Compte courant", 1000000, "€", $floris),
  $ccBertrand = new Compte("Compte courant", 100, "€", $bertrand),
  $ccMaurice = new Compte("Compte courant", 1000, "€", $maurice),
  $ccBernard = new Compte("Compte courant", 500, "€", $bernard),
  $ccGilbert = new Compte("Compte courant", 2000, "€", $gilbert),
  $laFloris = new Compte("Livret A", 5000, "€", $floris),
  $laGilbert = new Compte("Livret A", 200, "€", $gilbert),
  $laBertrand = new Compte("Livret A", 20, "€", $bertrand),
  $peFloris = new Compte("Plan Epargne", 400, "€", $floris),
  $peGilbert = new Compte("Plan Epargne", 4000, "€", $gilbert),
];

echo "<p>".$ccFloris->getInfos()."</p>";

echo $floris->getInfos();
echo $gilbert->getInfos();
echo $maurice->getInfos();

echo $ccFloris->crediter(100);
echo $ccMaurice->debiter(100.55);
echo "<============================================================================><br>";

echo $ccGilbert->virement(1500.45, $peFloris);

echo $floris->getInfos();
echo $gilbert->getInfos();
echo $maurice->getInfos();