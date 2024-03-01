<h1>Exercice 9</h1>
<b>
  <p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
  </p>
</b>

<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];
echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio) {
  $result = "";

  foreach ($nomsRadio as $nom) {
    $result .="<input id='$nom' name='sex' type='radio' />";
    $result .="<label for='$nom'>$nom</label><br>";
  }
  return $result;
}