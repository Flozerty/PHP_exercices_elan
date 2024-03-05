<h1>Exercice 6</h1>
<b>
  <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs.</p>
  <p>Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);</p>
</b>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {
  $result = "<select name='choice'>";
  foreach ($elements as $element) {
    $result .= "<option value='$element'>$element</option>";
  }
  
  $result .= "</select>";
  return $result;
}