<h1>Exercice 11</h1>
<p><b>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.
  </b></p>

<?php 
$tableau = ["Peugeot", "Renault", "BMW", "Mercedes"];

function afficher($table) {

  echo"Il y a ".count($table)." marques de voitures dans le tableau :<br>";
  echo"<ul>";
  foreach ($table as $marque) {
      echo "<li>$marque</li>";
  }
  echo"</ul>";
}

afficher($tableau);