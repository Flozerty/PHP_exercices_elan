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
  "Nom",
 "Prénom",
  "Ville"
];
afficherInput($nomsInput);

function afficherInput($nomsInput) {
  foreach ($nomsInput as $input) {
    echo $input." :<br>";
  }
}