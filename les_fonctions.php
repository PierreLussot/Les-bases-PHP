<?php
// ---------------------------LES FONCTIONS-------------------------------\\

/* $a = readline('entre votre chiffre a multiplier ');
$b = readline('entre votre chiffre multiplicative ');

function multiple($a, $b)
{
    $c =$a * $b;
    return 'le chiffre '.$a .' multiplier par le multiple de '.$b.' = ' .$c;
}

echo multiple($a,$b);
 */


/* $a =   readline('entre un nom ' );
 $b = strtolower( strrev($a) );

function palindrome ( $a,$b)
{

   if (strtolower($a) === $b) {
        return " $a est un palindrome";
}else {
        return "$a n'est pas un palindrome";
}

}

echo palindrome($a, $b); */

/* $notes = [10 , 20 ,13];

$cumul_note = array_sum($notes);
$nbr_note = count($notes);

 function calcule_moyenne ($cumul_note , $nbr_note)
{



 $result = $cumul_note / $nbr_note ;

 return round($result ,2)  ;

}
 echo calcule_moyenne($cumul_note, $nbr_note) ;  */

$a = readline( 'entrer un mot ');

$b = [$a];


print_r($b);