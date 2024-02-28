<h1>Exercice 12</h1>
<p><b>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
  </b></p>

<?php
$table = [
  "Mickaël" => "FRA",
  "Virgile" => "ESP",
  "Marie-Claire" => "ENG",
];

ksort($table);

foreach ($table as $name => $nat) {
  switch ($nat) {
    case "FRA": echo"Salut "; break;
    case "ESP": echo"Hola "; break;
    default: echo"Hello ";
  }
  echo $name."<br>";
}