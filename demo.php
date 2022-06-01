<?php
// ---------------------------LES BOUCLES -------------------------------\\
// ---------------------------CHIFFRE ALEATOIRE-------------------------------\\

/* 
$aleatoire = rand(1, 10);
$chiffres = (int)readline("entre un chiffre ($aleatoire)");
(int)$coup = 3;
if ($chiffres !== $aleatoire) {
    while (true) {
        $chiffres = (int)readline(" faux entre un chiffre il reste $coup essaie  ($aleatoire)");
        $coup--;

        if ($chiffres === $aleatoire) {
            echo 'gangner';
            break;
        } elseif ($coup === 0) {
            echo 'perdu';
            break;
        }
    }
} else {
    echo 'trouver';
} 
*/

// ---------------------------CRENEAU MAGASIN-------------------------------\\

/* while (true) {

    $debut = (int)readline('heure de ouverture ');
    $fin = (int)readline('heure de fermeture ');
    if ($debut > $fin) {
        echo "pas possible l\'heure d\'ouverture ($debut) ne peut pas être supérieure à celle de la fermeture($fin) \n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('rentrer un nouveau creneaux o/n ');
        if ($action === 'n') {
            break;
        }
    }
}

 $heure = (int)readline("A quelle heure voulez vous visitez le magasin ? ");
 $creneauTrouve = false;

foreach ($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'ouvert ';
} else {
    echo ' fermer';
}
 */


/*
while (true) {

    $debut = (int)readline('heure de ouverture ');
    $fin = (int)readline('heure de fermeture ');
    if ($debut > $fin) {
        echo "pas possible l\'heure d\'ouverture ($debut) ne peut pas être supérieure à celle de la fermeture($fin) \n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('rentrer un nouveau creneaux n ');
        if ($action === 'n') {
            break;
        }
    }
}
echo 'magasin ouvert de ';
foreach ($creneaux as $key => $value) {
    if ($key > 0) {
        echo ' et de ';
    }
    echo  $value[0] . ' a ' . $value[1];
}
 */

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