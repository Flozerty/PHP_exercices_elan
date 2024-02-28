<h1>Exercice 9</h1>
<p><b>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »)
  </b></p>

<?php 
$age = 32;
$sexeH = false;


(($sexeH && $age > 20) || (!$sexeH&& $age >= 18 && $age <= 35)) ?
$imposable = true : $imposable = false;

echo
  "Age : $age<br>
  Sexe : ".($sexeH ? "Homme" : "Femme")."<br>
  La personne ".($imposable ? "est imposable" : "n'est pas imposable");