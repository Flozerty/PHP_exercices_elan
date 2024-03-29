<?php 

spl_autoload_register(function ($class_name) {
  require 'classes/'. $class_name .'.php';}
);

$auteurs = [
  $stephenKing = new Auteur("Stephen", "King"),
  $robinHobb = new Auteur("Robin","Hobb"),
];

$books = [
  $ca = new Livre("Ca", 1138, 1986, 20, $stephenKing),
  $simetierre = new Livre("Simetierre", 374, 1983, 15, $stephenKing),
  $leFleau = new Livre("Le Fléau", 823, 1978, 14, $stephenKing),
  $shining = new Livre("Shining", 447, 1977, 16, $stephenKing),
  $assassinRoyal1 = new Livre("L'assassin royal Tome 1 L'apprenti assassin", 680, 1995, 8.70, $robinHobb) ,
  $assassinRoyal2 = new Livre("L'assassin royal Tome 2 L'assassin du roi", 587, 1996, 8.70, $robinHobb) ,
  $assassinRoyal3 = new Livre("L'assassin royal Tome 3 La nef du crépuscule", 504, 1996, 8.70, $robinHobb) ,
  $assassinRoyal4 = new Livre("L'assassin royal Tome 4 Le poison de la vengeance", 752, 1997, 8.70, $robinHobb) ,
  $assassinRoyal5 = new Livre("L'assassin royal Tome 5 La voie magique", 425, 1997, 8.7, $robinHobb) ,
  $assassinRoyal6 = new Livre("L'assassin royal Tome 6 La reine solitaire", 546, 1997, 8.7, $robinHobb) ,
];

foreach($auteurs as $auteur) {
  echo $auteur->afficherBibliographie();
}