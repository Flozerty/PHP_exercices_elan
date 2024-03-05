<h1>Exercice 10</h1>
<p><b>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
  </b></p>

<?php
$facture = 152;
$recu = 200;
$reste = $recu - $facture;

echo
"Montant à payer : $facture €<br>
Montant versé : $recu €<br>
Reste à payer : $reste €<br>
*********************<br>
Rendu de monnaie :<br>";

$bills = [10, 5, 2, 1];

foreach ($bills as $bill) {
  $numberOfBills = floor($reste / $bill);

  if($numberOfBills > 0) {
    echo "$numberOfBills ".(($bill == 1 || $bill == 2) ? "pièce" : "billet").(($numberOfBills == 1) ? "":"s"). " de $bill €<br>";

    $reste = $reste - ($numberOfBills * $bill);
  } 
}