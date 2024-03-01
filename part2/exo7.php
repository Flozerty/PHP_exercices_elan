<h1>Exercice 7</h1>
<b>
  <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>
</b>

<?php

$elements = ["choix 1", "choix 2", "choix 3"];
echo genererCheckbox($elements);

function genererCheckbox($elements) {
  $result = "";

  foreach ($elements as $element) {
    $result .= "<input id='$element' name='choices' type='checkbox'>";
    $result .= "<label for='$element'>$element</label><br>";
  }
  return $result;
}