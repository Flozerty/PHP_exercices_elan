<h1>Exercice 7</h1>
<b>
  <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>
</b>

<?php

$elements = [
  "choix 1" => true,
  "choix 2" => false,
  "choix 3" => true,
];
echo genererCheckbox($elements);

function genererCheckbox($elements) {
  $result = "<form>";

  foreach ($elements as $element => $checked) {
    $result .= "<input id='$element' name='choices' type='checkbox' ".
    ($checked ? "checked>" : ">");
    $result .= "<label for='$element'>$element</label><br>";
  }
  return $result."</form>";
}