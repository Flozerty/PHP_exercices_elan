<h1>Exercice 4</h1>
<p><b>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</b></p>

<?php 
$phrase = "Engage le jeu que je le gagne";
$charactersToLowerCaseOnly = strtolower(str_replace(" ", "", $phrase));

// function palindrome($phrase) {

//   for( $i = 0 ; $i < strlen($phrase) / 2; $i++) {
//     if ($phrase[$i] != $phrase[strlen($phrase) - $i -1]) {
//       return false;
//     }
//   }
//   return true;
// }
// echo palindrome($charactersToLowerCaseOnly) ? "La phrase est palindrôme" : "La phrase n'est pas palindrôme";

echo $charactersToLowerCaseOnly == strrev($charactersToLowerCaseOnly) ? "palindrome" : "pas palindrome";