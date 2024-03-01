<h1>Exercice 8</h1>
<b>
  <p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
  </p>
</b>


<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 4);

function repeterImage($url, $nb) {
  for ($i = 0; $i < $nb; $i++) {
    echo "<img src='$url' alt='un chien machouille une tongue img n°".($i+1)."'>";
  }
}