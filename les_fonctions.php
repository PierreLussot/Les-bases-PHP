<?php
// ---------------------------LES FONCTIONS-------------------------------\\


// ---------------------------CALCULE DE MOYENNE-------------------------------\\

//------methode 1--------\\
/* $a = readline('entre votre chiffre a multiplier ');
$b = readline('entre votre chiffre multiplicative ');

function multiple($a, $b)
{
    $c =$a * $b;
    return 'le chiffre '.$a .' multiplier par le multiple de '.$b.' = ' .$c;
}

echo multiple($a,$b);
 */

//------methode 2--------\\

/* $notes = [10 , 20 ,13];

$cumul_note = array_sum($notes);
$nbr_note = count($notes);

 function calcule_moyenne ($cumul_note , $nbr_note)
{

 $result = $cumul_note / $nbr_note ;

 return round($result ,2)  ;

}
 echo calcule_moyenne($cumul_note, $nbr_note) ;  */

// ---------------------------TROUVER UN PALINDROME-------------------------------\\

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


// ---------------------------FILTRE A INSULTE-------------------------------\\

//------methode 1--------\\

//$mots = ['merde', 'con'];
//$phrase = readline('entrez une phrase ');

/*

foreach ($mots as $mot) {
    $taille_str = strlen($mot);//calcul la taille du mot
    $remplace_str = str_repeat('*', $taille_str,);//ajoute une  * = a la taille du mot ( pour con 3 * pour merde 5 * )
    $phrase = str_replace($mot, $remplace_str, $phrase);//remplace les gros mots pas une etoile
}

str_replace($mot, $remplace_str, $phrase)
echo $phrase;

*/
//------methode 2--------\\

//$phrase = str_replace($mots,['*****','$$'] , $phrase);//remplace par * le mot dans le tableau
//echo $phrase;

//------methode 3--------\\
//$etoile = [];
//foreach ($mots as $mot) {
//
//    $taille_str = strlen($mot)-1;
//    $e = substr($mot,0,1);
//
//    $etoile[] = $e .str_repeat('*', $taille_str);
//
//}
//
//echo $phrase = str_replace($mots, $etoile, $phrase);


while (true){
    $ecrire = readline(' entrez notes'." ");
    if ( $ecrire  === ""){
        break;
    }else{
        $notes[] = $ecrire;
    }
}

$nbr_note = count($notes);
$cumul_note = array_sum($notes);
$resultat = $cumul_note / $nbr_note;

echo round($resultat,2) ;











