<h1>Exercice 8</h1>
<b>
  <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :<br></p>
  Affichage (pour la table de 8) :<br>
  Table de 8 :<br>
  1 x 8 = 8<br>
  2 x 8 = 16<br>
  3 x 8 = 24 …<br>
  <p>Remarque : proposer 2 solutions avec 2 types de boucles.</p>
</b>

<?php 
$number = 5;

// for ($i = 1; $i <= 10; $i++) {
//   echo"$i * $number = ".$i * $number."<br>";
// }

$i= 1;
while ($i <= 10) {
  echo"$number * $i = ".$i * $number."<br>";
  $i++;
}