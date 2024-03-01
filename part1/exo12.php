<h1>Exercice 12</h1>
<p><b>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
  </b></p>

<?php
$people = [
  "Mickaël" => "FRA",
  "Virgile" => "ESP",
  "Marie-Claire" => "ENG",
  "Flo" => "szerty",
];

$lang = [
  "FRA"=> $greet = "Salut",
  "ESP"=> $greet = "Hola",
  "ENG" => $greet = "Hello",
];

ksort($people);

foreach ($people as $name => $nat) {
  
  if (array_key_exists($nat, $lang)) {
    
    echo $lang[$nat]." ".$name."<br>";
    
  } else {
    echo "langue non prise en charge. <br>";
  }
}