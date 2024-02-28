<h1>Exercice 13</h1>
<p><b>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient). Elle devra être affichée avec 2 décimales.
  </b></p>

<?php
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sumNotes = array_sum($notes);
$moyenne = round($sumNotes / $nbNotes, 2);

echo "Les notes obtenues par l'élève sont : ";
foreach( $notes as $note ) {
  echo $note." ";
}
echo "<br>Sa moyenne générale est donc de : ".round( $moyenne,2);