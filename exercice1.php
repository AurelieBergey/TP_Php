<?php
// ecrire une chaine de caractère a l'envers dans le terminal  de deux façons

echo strrev("Leon a rase Cesar a Noel");

$mot = "Engage le jeu que je le gagne ";
$array = str_split($mot);
print_r ($array);
$nb = strlen($mot);


for ( $i = $nb -1 ; $i >= 0;$i--){
    echo($array[$i]);
}
      

?>