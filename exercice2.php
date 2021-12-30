<?php

// faire une fonction qui repére un palindrome et une autre qui repère une anagramme

$palin ="toto";
$array = str_split($palin);
print_r ($array);
$nb = strlen($palin);


for ( $i = $nb -1 ; $i >= 0;$i--){
    echo($array[$i]);
    if($array[$i] == $palin[$i-$nb] ){
        echo ("c'est un palindrome");
        break;
    }else{
        echo("non non");
    }
}
  