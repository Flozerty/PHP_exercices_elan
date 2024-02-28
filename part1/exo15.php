<h1>Exercice 15</h1>
<b>
  <p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>
  <p>$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>
</b>


<?php

class Person {
  public $_lastName;
  public $_firstName;
  public $_dateBorn;
  
  public function __construct($lastName, $firstName, $dateBorn) {
    $this->_lastName = $lastName;
    $this->_firstName = $firstName;
    $this->_dateBorn = new DateTime($dateBorn);
  }

  public function age() {
    $dateNow = new DateTime();
    $diff = $this->_dateBorn->diff($dateNow);
    return $diff->y;
  }
}

$p1 = new Person("dupont", "michel", "1980-02-19");
$p2 = new Person("duchemin", "alice", "1985-01-17");

$persons = [$p1, $p2];

foreach ($persons as $person) {
  echo ucwords($person->_firstName)." ".strtoupper($person->_lastName)." a ". $person->age() ." ans.<br>";
}