<h1>Exercice 12</h1>
<b>
  <p>
    La fonction var_dump($variable) permet d’afficher les informations d’une variable.
    Soit le tableau suivant : <br>
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
  </p>
</b>

<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach($tableauValeurs as $value) {
  var_dump($value);
  echo"<br>";
}

echo"<br>";

for($i=0; $i<count($tableauValeurs); $i++) {
  var_dump($tableauValeurs[$i]);
  echo"<br>";
}

echo"<br>";

$i=0;
while ($i<count($tableauValeurs)) {
  var_dump($tableauValeurs[$i]);
  echo"<br>";
  $i++;
}