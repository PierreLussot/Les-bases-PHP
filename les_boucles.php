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

