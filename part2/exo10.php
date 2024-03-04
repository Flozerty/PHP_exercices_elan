<h1>Exercice 10</h1>
<b>
  <p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
    complet qui contient les informations suivantes :<br>
    champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra
    sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de
    projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit)
  </p>
</b>

<style>
form {
  background-color: blanchedalmond;
  padding: 10%;
}

fieldset {
  width: 20%;
  margin: 5px;
}

#userInfo input {
  width: 200px;
}

#userInfo {
  width: 100%;
}

ul {
  padding: 0;
  list-style-type: none;
}

button {
  margin: 10px;
}
</style>

<?php

$nomsInput = [
  "Nom" => ["lastname", "text"],
 "Prénom" => ["firstname", "text"],
  "Ville" => ["street", "text"],
  "e-mail"=> ["email", "email"],
];

$sexRadio = ["Masculin", "Féminin", "Autre"];

$formations = [
  "Développeur Logiciel",
  "Designer Web",
  "Intégrateur",
  "Chef de projet"];

function InfosUser($nomsInput) {

  $result = "
  <fieldset id= userInfo>
    <legend>Informations générales:</legend>
      <ul>";

  foreach ($nomsInput as $input => $sort) {
    
    $result .= "<li><label for=$sort[0]>$input :</label><br>
    <input type='$sort[1]' id='$sort[0]'></li>";
  }
  
  $result .= " </ul></fieldset>";
  return $result;
}

function afficherRadio($sexRadio) {
  $result =
   "<fieldset id='sex'>
      <legend>sexe:</legend>";

  foreach ($sexRadio as $nom) {
    $result .="<input id='$nom' name='sex' type='radio' />";
    $result .="<label for='$nom'>$nom</label><br>";
  }
  $result .= "</fieldset>";
  return $result;
}

function formationsListe($formations) {
  $result = "<select name='choice' id='formations'>";
  $result .= "<optgroup label='--Choisissez une formation--'>";

  foreach ($formations as $formation) {
    $result .= "<option value='$formation'>$formation</option>";
  }
  
  $result .= "</optgroup></select>";
  return $result;
}

function afficherForm($nomsInput, $sexRadio, $formations) {

  $result= "<form action='#' method='post'>";
  $result .= InfosUser($nomsInput);
  $result .= afficherRadio($sexRadio);
  $result .= formationsListe($formations);
  $result .= "<br><button type='submit'>envoyer</button></form>";

  return $result;
};

echo afficherForm($nomsInput, $sexRadio, $formations);

?>