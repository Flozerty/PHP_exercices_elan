<h1>Exercice 3</h1>
<p><b>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ».<br> Afficher l’ancienne et la nouvelle phrase.</b></p>

<?php 
$phrase = "Notre formation DL commence aujourd'hui";

echo
  "Ancienne phrase : $phrase.<br>"
  ."Nouvelle phrase : ".str_replace("aujourd'hui","demain",$phrase).".";