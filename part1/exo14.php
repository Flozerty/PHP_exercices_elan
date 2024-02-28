<h1>Exercice 14</h1>
<p><b>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
  </b></p>

<?php
;

$dateBorn = new DateTime("1995-07-03");
$dateNow = new DateTime();
$diff = $dateBorn->diff($dateNow);

echo"date de naissance : ".$dateBorn->format("d/m/Y")."<br>";
echo "date actuelle : ".$dateNow->format("d M Y")."<br>";
echo "Age de la personne : ".$diff->y." ans, ".$diff->m." mois et ".$diff->d." jours.";