<h1>Exercice 15</h1>
<b>
  <p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>
  <p>$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>
</b>


<?php

class Person {
  private string $lastName;
  private string $firstName;
  private DateTime $dateBorn;
  
  public function __construct(
    
    string $lastName,
    string $firstName,
    string $dateBorn,
    ) {
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->dateBorn = new DateTime($dateBorn);
  }

  private function age() {
    $dateNow = new DateTime();
    $diff = $this->dateBorn->diff($dateNow);
    return $diff->y;
  }

  public function getDateBorn()
  {
    return $this->dateBorn;
  }

  public function setDateBorn($dateBorn)
  {
    $this->dateBorn = $dateBorn;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  public function __toString() {
    return $this->lastName ." ". $this->firstName ." , a ".$this->age()." ans.";
  }
}
  
$p1 = new Person("dupont", "michel", "1980-02-19");
$p2 = new Person("duchemin", "alice", "1985-01-17");

$persons = [$p1, $p2];



foreach ($persons as $person) {
  echo $person."<br>";
}