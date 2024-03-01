<h1>Exercice 4</h1>
<b>
  <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/</p>
</b>

<?php

$capitales = [
  "France"=>"Paris",
  "Allemagne"=>"Berlin",
  "USA"=>"Washington",
  "Italie"=>"Rome",
  "Espagne"=>"Madrid",
];

function afficherTableHTML($capitales) {
  ksort($capitales);

  echo "<table style='border: 1px solid black;'>
  <tr>
      <th style='border: 1px solid black'>Pays</th>
      <th style='border: 1px solid black'>Capitales</th>
      <th style='border: 1px solid black'>Lien wiki</th>
    </tr>";
  foreach($capitales as $pays => $capitale){
    echo "
    <tr>
      <td style='border: 1px solid black'>".mb_strtoupper($pays)."</td>
      <td style='border: 1px solid black'>".$capitale."</td>
      <td style='border: 1px solid black'>"
      .'<a href="https://fr.wikipedia.org/wiki/'.$capitale.'"
      target="_blank">lien</a></td>
    </tr>';
  };
  echo "</table>";
}

afficherTableHTML($capitales);