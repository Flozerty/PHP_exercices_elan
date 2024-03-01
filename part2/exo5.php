<h1>Exercice 5</h1>
<b>
  <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés.</p>
  <p>Exemple :<br>
    $nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);</p>
</b>

<?php

$nomsInput = [
  "Nom" => "name",
 "Prénom" => "firstname",
  "Ville" => "street"
];

echo afficherInput($nomsInput);

function afficherInput($nomsInput) {

  $result = "<form>";

  foreach ($nomsInput as $input => $sort) {
    
    $result .= "<label for=$sort>$input :</label>
    <input type='text' id='$sort'><br>";
  }
  
  $result .= "</form>";
  return $result;
}