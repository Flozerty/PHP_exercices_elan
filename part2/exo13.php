<h1>Exercice 13</h1>
<b>
  <p>
    Créer une classe Voiture possédant les propriétés suivantes : <span>marque, modèle, nbPortes et
      vitesseActuelle</span>.<br>
    ainsi que les méthodes <span>demarrer( ), accelerer( ) et stopper( )</span> en plus
    des accesseurs (get) et mutateurs (set) traditionnels.<br>
  </p>
  <p> La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
    véhicule.<br>
    v1 ➔ "Peugeot","408",5<br>
    v2 ➔ "Citroën","C4",3<br>
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
    tests pour vérifier la cohérence de la classe Voiture.
  </p>
  <p>Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.</p>
</b>

<style>
span {
  color: red;
}
</style>

<?php

class Voiture {
  private string $marque;
  private string $model;
  private int $nbportes;
  private float $vitesseActuelle;
  private bool $power;

  public function __construct(
    string $marque,
    string $model,
    int $nbportes,
  ) {
    $this->marque = $marque;
    $this->model = $model;
    $this->nbportes = $nbportes;
    $this->vitesseActuelle = 0;
    $this->power = false;
  }
                            ///////////////////////////////////
                            /////// GETTERS AND SETTERS ///////
                            ///////////////////////////////////
  public function getMarque(): string
  {
    return $this->marque;
  }
  public function setMarque($marque)
  {
    $this->marque = $marque;
  }
  public function getModel(): string
  {
    return $this->model;
  }
  public function setModel($model)
  {
    $this->model = $model;
  }
  public function getNbportes(): int
  {
    return $this->nbportes;
  }
  public function setNbportes($nbportes)
  {
    $this->nbportes = $nbportes;
  }
  public function getVitesseActuelle(): float
  {
    return $this->vitesseActuelle;
  }
  public function setVitesseActuelle($vitesseActuelle)
  {
    $this->vitesseActuelle = $vitesseActuelle;
  }
  public function getPower()
  {
    return $this->power;
  }
  public function setPower($power)
  {
    $this->power = $power;
  }
                            ///////////////////////////////////
                            //////////// FUNCTIONS ////////////
                            ///////////////////////////////////

  public function demarrer(){
    $this->setPower(true);
  }

  public function stopper(){
    $this->setVitesseActuelle(0);
    $this->setPower(false);
  }

  public function accelerer($speed){
    $this->vitesseActuelle += $speed;
  }

  // public function ralentir($speed){
  //   $this->vitesseActuelle -= $speed;
  // }

  public function __toString() {
    
    $resultat = "Infos véhicule<br>";
    return$resultat;
  }
}

$vehicules = [
$v1 = new Voiture("peugeot", "408", 5),
$v2 = new Voiture("citroën", "C4", 3),
];

foreach($vehicules as $v) {
  echo $v;
}