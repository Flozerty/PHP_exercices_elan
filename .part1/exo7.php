<h1>Exercice 7</h1>
<p><b>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser.</b></p>

<?php 

$age = 8;


if( $age >= 6 && $age <= 17 && gettype($age) == 'integer' ) {
  echo"L'enfant est de la catégorie <b>";
  switch(true) {
    case $age <= 7 : echo "poussin"; break;
    case $age <= 9 : echo "pupille"; break;
    case $age <= 11 : echo "minime"; break;
    default: echo "cadet";
  }
  echo"</b>.";
} else {
    echo "Veuillez saisir un âge entre 6 et 17 ans.<br>";
}