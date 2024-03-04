<h1>Exercice 11</h1>
<b>
  <p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de
    caractère représentant une date.
  </p>
  <p>Exemple :<br>
    formaterDateFr("2018-02-23");</p>
</b>

<?php

$timestamp = strtotime('2018-02-23');

$formatter = new IntlDateFormatter(
  //LOCALE
    'fr_FR', 

// DATE : 
// FULL(D dd MMMM yyyy) 
// / LONG(dd MMMM yyyy) 
// / MEDIUM(dd MM yyyy) 
// / SHORT(dd/MM/yyyy)

    IntlDateFormatter::SHORT, 

// HEURE : 

    IntlDateFormatter::NONE,
);
$date_fr = $formatter->format($timestamp);

echo $date_fr;