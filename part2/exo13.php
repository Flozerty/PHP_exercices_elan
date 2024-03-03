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
* {
  padding: 2px 5px;
}

span {
  color: red;
}

main {
  display: flex;
  justify-content: space-evenly;
}

#board {
  background-color: rgb(230, 230, 230);
}

#vehiclesBoard {
  background-color: rgb(230, 230, 230);
  display: flex;
  justify-content: space-around;
  height: fit-content;
}

.vInfo p {
  margin: 5px;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

li {
  padding-bottom: 5px;
}
</style>

<?php
                            ///////////////////////////////////
                            /////////////// PHP ///////////////
                            ///////////////////////////////////
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
    if($this->getPower()) {
      return "Le véhicule $this->marque $this->model est déjà démarré";
    }else{
      $this->setPower(true);
      return "Le véhicule $this->marque $this->model démarre";
    };
    
  }

  public function stopper(){
    if($this->getPower()) {

      $this->setVitesseActuelle(0);
      $this->setPower(false);
      return "Le véhicule $this->marque $this->model s'arrête";

    }else{
      return "Le véhicule $this->marque $this->model est déjà à l'arrêt";
    }
  }

  public function accelerer($speed){
    if($this->getPower()) {
      $this->vitesseActuelle += $speed;
      return"Le véhicule $this->marque $this->model accélère de $speed km/h<br>";
      
    }else{
      return "Le véhicule $this->marque $this->model veut accélérer de $speed km/h<br>".
      "Pour accélérer, il faut démarrer le véhicule $this->marque $this->model!";
    }
  }

  public function ralentir($speed){
    if($this->getPower()) {
      if ($this->vitesseActuelle < $speed) {
        // ne peut pas ralentir plus
        $this->setVitesseActuelle(0);
        return"
        Le véhicule $this->marque $this->model veut ralentir de $speed km/h.<br>
        Il atteint 0 km/h et est maintenant à l'arrêt.";
      } else {
        // ralentit normalement
        $this->vitesseActuelle -= $speed;
        return "Le véhicule $this->marque $this->model ralentit de $speed km/h";
      }
    }else{
      // véhicule à l'arrêt
      return "Le véhicule $this->marque $this->model veut ralentir de $speed km/h<br>".
      "Le véhicule $this->marque $this->model ne peut pas ralentir à l'arrêt!";
    }
  }

  public function __toString() {
    
    return "
      <p>Nom et modèle du véhicule :<br> $this->marque $this->model</p>
      <p>Nombre de portes : $this->nbportes</p>
      <p>Le véhicule $this->marque est ".($this->power ? "démarré" : "à l'arrêt")."</p>
      <p>Sa vitesse actuelle est de $this->vitesseActuelle km/h</p>";
  }
}
                            ///////////////////////////////////
                            /////////// VARIABLES /////////////
                            ///////////////////////////////////
$vehicules = [
$v1 = new Voiture("peugeot", "408", 5),
$v2 = new Voiture("citroën", "C4", 3),
];

$instructions = [
  $v1->demarrer(),
  $v1->accelerer(50),
  $v2->demarrer(),
  $v2->stopper(),
  $v2->accelerer(20),
];

function displayVehicles($vehicules) {
  $i=1;
  $result="<div id=vehiclesBoard>";
  foreach($vehicules as $v) {

    $result .= 
    "<div class='vInfo'>
      Infos véhicule $i :<br>
      ************************<br>
      $v
    </div>";

    $i++;
  }
  $result .= "</div>";
  return $result;
}

function displayBoard($instructions, $vehicules) {
  $result = "<div id='board'><ul>";
  
  foreach($instructions as $instruction) {
    $result .= "<li>$instruction</li>";
  }

  foreach($vehicules as $v) {
    $result .= "La vitesse du véhicule ".$v->getmarque()." ".$v->getmodel()." est de ".$v->getvitesseActuelle()." km/h<br>";
  }
   $result .= "</ul></div>";
  return $result;
}

echo "<main>".displayBoard($instructions, $vehicules).displayVehicles($vehicules)."</main>";