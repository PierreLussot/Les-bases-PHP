<?php
// ---------------------------LES FONCTIONS-------------------------------\\


// ---------------------------CALCULE DE MOYENNE-------------------------------\\

//------methode 1--------\\

/*

$a = readline('entre votre chiffre a multiplier ');
$b = readline('entre votre chiffre multiplicative ');

function multiple($a, $b)
{
    $c = $a * $b;
    return 'le chiffre ' . $a . ' multiplier par le multiple de ' . $b . ' = ' . $c;
}

echo multiple($a, $b);

*/

//------methode 2--------\\

/*

$notes = [10, 20, 13];

$cumul_note = array_sum($notes);
$nbr_note = count($notes);

function calcule_moyenne($cumul_note, $nbr_note)
{

    $result = $cumul_note / $nbr_note;

    return round($result, 2);

}

echo calcule_moyenne($cumul_note, $nbr_note);

*/

//------methode 3--------\\

/*

$nbr_tour = 0;
while (true) {
    $ecrire = readline(' entrez notes' . " ");
    $nbr_tour++;
    if ($nbr_tour === 4) {
        echo 'vous pouvez entre que 4 notes maximum' . "\n";
        break;
    } else {
        $notes[] = $ecrire;
    }

}
$nbr_note = count($notes);
$cumul_note = array_sum($notes);
$resultat = $cumul_note / $nbr_note;

echo 'votre moyenne est de ' . round($resultat, 2);

*/

// ---------------------------TROUVER UN PALINDROME-------------------------------\\
/*

$a = readline('entre un nom ');
$b = strtolower(strrev($a));

function palindrome($a, $b)
{
    if (strtolower($a) === $b) {
        return " $a est un palindrome";
    } else {
        return "$a n'est pas un palindrome";
    }
}

echo palindrome($a, $b);

 */




// ---------------------------FILTRE A INSULTE-------------------------------\\

//------methode 1--------\\

/*
$mots = ['flute', 'zute'];
$phrase = readline('entrez une phrase ');

foreach ($mots as $mot) {
    $taille_str = strlen($mot);//calcul la taille du mot
    $remplace_str = str_repeat('*', $taille_str,);//ajoute une  * = a la taille du mot ( pour con 3 * pour merde 5 * )
    $phrase = str_replace($mot, $remplace_str, $phrase);//remplace les gros mots pas une etoile
}

echo $phrase;
*/


//------methode 2--------\\

/*
$mots = ['flute', 'zute'];
$phrase = readline('entrez une phrase ');

$phrase = str_replace($mots, ['*****', '$$'], $phrase);//remplace par * le mot dans le tableau
echo $phrase;
*/


//------methode 3--------\\

/*
$mots = ['flute', 'zute'];
$phrase = readline('entrez une phrase ');

$etoile = [];
foreach ($mots as $mot) {
    $taille_str = strlen($mot) - 1;
    $e = substr($mot, 0, 1);
    $etoile[] = $e . str_repeat('*', $taille_str);
}

echo $phrase = str_replace($mots, $etoile, $phrase);
*/

//------methode 4--------\\
/*

$phrase = readline('entrez une phrase ');
$mots = ['flute', 'zute'];

foreach ($mots as $mot) {
    $tri = stristr($phrase, $mot);
    if ($tri != false) {
        $bool = true;
        break;
    }
}
if ($bool) {
    echo "Message supprimé ...";
} else {
    echo $phrase;
}

*/

// ---------------------------LOTO-------------------------------\\

/*
function loto()
{
    $i = 1;
    $int_chance1 = rand(1, 10);
    $int_chance2 = rand(1, 10);
    $int_chance3 = rand(1, 10);

    $texte1 = readline('entre un chiffre 1 ');
    $texte2 = readline('entre un chiffre 2 ');
    $texte3 = readline('entre un chiffre 3 ');

    while (true) {
        $tabs = [$texte1, $texte2, $texte3];

        if ($i == 3) {
            if ($tabs[0] == $int_chance1 &&
                $tabs[1] == $int_chance2 &&
                $tabs[2] == $int_chance3) {
                echo 'you win' . "\n";
                break;
            } else {
                echo "loose" . "\n";
            }
            break;
        }
        $i++;
    }
}

echo loto();
*/
function repondre_ou_non()
{
    while (true) {
        $phrase = readline('oui ou non ');
        if ($phrase == 'o') {
            return true;
        } elseif ($phrase == 'n') {
            return false;
            break;
        }
    }

}

$resultat = repondre_ou_non();

echo $resultat;
var_dump($resultat);












