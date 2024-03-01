<h1>Exercice 1</h1>
<b>
  <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
</b>

<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte) {
 strtoupper($texte);
}