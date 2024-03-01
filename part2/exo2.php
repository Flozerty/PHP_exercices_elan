<h1>Exercice 1</h1>
<b>
  <p>Soit le tableau suivant : <br>
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); <br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en
    majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales)</p>
</b>

<?php

$capitales = [
  "France"=>"Paris",
  "Allemagne"=>"Berlin",
  "USA"=>"Washington",
  "Italie"=>"Rome"
];

function afficherTableHTML($capitales) {
  ksort($capitales);

  echo "<table style='border: 1px solid black;'>
  <tr>
      <th style='border: 1px solid black'>Pays</th>
      <th style='border: 1px solid black'>Capitales</th>
    </tr>";
  foreach($capitales as $pays => $capitale){
    echo "
    <tr>
      <td style='border: 1px solid black'>".mb_strtoupper($pays)."</td>
      <td style='border: 1px solid black'>".$capitale."</td>
    </tr>";
  };
  echo "</table>";
}

afficherTableHTML($capitales);