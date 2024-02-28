<h1>Exercice 6</h1>
<p><b>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2).
  </b></p>

<?php 
$tva = 0.2;

$prixArticle = 9.99;
$Quantite = 5;

$total = (1+ $tva) * $prixArticle * $Quantite;

echo "Prix unitaire de l'article : $prixArticle €<br>
Quantité : $Quantite<br>
Taux de TVA : $tva<br>
Le montant de la facture à régler est de : $total €";