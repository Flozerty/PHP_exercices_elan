<h1>Exercice 14</h1>
<b>
  <p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
    qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>
  <p>
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
    suivantes :<br>
    <span>Peugeot 408 : $v1 = new Voiture("Peugeot","408");</span><br>
    <span>BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<span>
  </p>
  <p>
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
    <span>echo $v1->getInfos()."<\br>";</span><br>
    <span>echo $ve1->getInfos()."<\br>";</span>
  </p>
</b>

<style>
span {
  color: grey;
}
</style>

<?php
                        ////////// CLASS VOITURE /////////

class Voiture {
  private string $marque;
  private string $modele;

  public function __construct(
    string $marque,
    string $modele,
  ) {
    $this->marque = $marque;
    $this->modele = $modele;
  }

//GETTERS & SETTERS
  public function getModele()
  {
    return $this->modele;
  }
  public function setModele($modele)
  {
    $this->modele = $modele;
  }
  public function getMarque()
  {
    return $this->marque;
  }
  public function setMarque($marque)
  {
    $this->marque = $marque;
  }
  public function __toString() {
    return "$this->marque $this->modele";
  }
}

                        /////// CLASS VOITURE ELEC ///////

class VoitureElec extends Voiture {
  private float $autonomie;

  public function __construct( 
    string $marque,
    string $modele,
    float $autonomie,
  ) { 
    parent::__construct($marque, $modele); //parent::
    $this->autonomie = $autonomie; 
  }

//GETTERS & SETTERS
  public function getAutonomie()
  {
    return $this->autonomie;
  }
  public function setAutonomie($autonomie)
  {
    $this->autonomie = $autonomie;
  }

  public function __toString() {
    return parent::__toString()." ".$this->autonomie;
  }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1."<br>";
echo $ve1."<br>";