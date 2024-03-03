<h1>Exercice 15</h1>
<b>
  <p>
    En utilisant les ressources de la page <a href="http://php.net/manual/fr/book.filter.php">ici</a>, vérifier si une
    adresse e-mail a le bon format.
  </p>
</b>

<?php

$email = "sder/;gf@zeze.fr";
echo "L’adresse $email est une adresse e-mail ".
(filter_var($email, FILTER_VALIDATE_EMAIL) ? "valide" : "non valide");