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
  display: flex;
  flex-direction: column;
  justify-content: space-between;

}

#board ul {

  max-height: 350px;
  overflow-y: auto;
}

#vInfoStatus {
  color: grey;
}

#vehiclesBoard {
  background-color: rgb(230, 230, 230);
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  height: fit-content;
  max-width: 60%;
}

.vInfo {
  border: 2px dashed black;
  width: 45%;
}

.vInfo:nth-child(n+4),
.vInfo:nth-child(n+3) {
  border-top: none;
  width: 45%;
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
      if($this->vitesseActuelle==0){
        //vitesse = 0
        return"Le véhicule $this->marque $this->model ne peut pas ralentir de $speed km/h,
        Il n'est pas encore parti!";

      } elseif ($this->vitesseActuelle < $speed) {
        // ne peut pas ralentir plus
        $this->setVitesseActuelle(0);
        return"Le véhicule $this->marque $this->model veut ralentir de $speed km/h.<br>
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
      <p>Le véhicule $this->marque est ".($this->power ? "démarré" : "éteint")."</p>
      <p>Sa vitesse actuelle est de $this->vitesseActuelle km/h</p>";
  }
}
                            ///////////////////////////////////
                            ///////////////////////////////////
                            ///////////////////////////////////
$vehicules = [
$v1 = new Voiture("peugeot", "408", 5),
$v2 = new Voiture("citroën", "C4", 3),
$v3 = new Voiture("peugeot", "508", 4),
$v4 = new Voiture("toyota", "Aygo X", 5),
$v5 = new Voiture("opel", "corsa", 3),
$v6 = new Voiture("audi", "A5", 3),
];

$instructions = [
  $v1->demarrer(),
  $v1->accelerer(50),
  $v4->demarrer(),
  $v5->stopper(),
  $v2->accelerer(20),
  $v6->demarrer(),
  $v6->accelerer(50),
  $v6->ralentir(50),
  $v1->demarrer(),
  $v6->stopper(),
  $v2->accelerer(20),
  $v4->ralentir(100),
  $v1->accelerer(50),
  $v2->demarrer(),
  $v3->stopper(),
  $v4->accelerer(20),
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
  //affichage des instructions
  foreach($instructions as $instruction) {
    $result .= "<li>$instruction</li>";
  }
  
  // affichage du rendu final des véhicules :
  $result .= "</ul><div id='vInfoStatus'>";
  foreach($vehicules as $v) {

    $result .= "Le véhicule ".$v->getmarque()." ".$v->getmodel();
  //Si le véhicule roule
    if ($v->getvitesseActuelle()>0) { 
      $result .= " roule à ".$v->getvitesseActuelle()." km/h";
    } else {

  //Si véhicule éteint, Power ? On : Off 
      $result .= ($v->getPower()) ?  " est à l'arret" : " est eteint";
    }
    $result .="<br>";
  }
  
  $result .= "</div></div>";
  return $result;
}

echo "<main>".displayBoard($instructions, $vehicules).displayVehicles($vehicules)."</main>";