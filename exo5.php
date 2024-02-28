<h1>Exercice 5</h1>
<p><b>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</b></p>

<?php 
$valeurFranc = 1;
$valeurEuro = 0.15244852;

$tirelireEnFrancs = 100;

echo "$tirelireEnFrancs francs valent aujourd'hui ".round($tirelireEnFrancs * $valeurEuro / $valeurFranc, 2) ." euros.";