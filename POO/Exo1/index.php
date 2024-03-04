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
];

echo $ca."<br>";
echo $stephenKing."<br>";
function afficherBibliographie($auteurs, $books){
  $result = "";
  
  foreach ($auteurs as $auteur) {
    $result  .= "<h1>$auteur</h1>";
    foreach ($books as $book) {
      $result .= "$book<br>";
      // if ($book->auteur == $auteur) {
      //   $result .= "$book<br>";
      //   echo $book;
      // }
    }
  }
  return $result;
  echo $result;
};

echo afficherBibliographie($auteurs, $books);