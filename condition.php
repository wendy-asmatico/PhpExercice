<?php

// Exercice 1

$role;

if ($role == 'admin') {
    echo "accès complet autorisé";
} elseif ($role == 'editeur') {
    echo "accès limité aux modifications";
} elseif ($role == 'visteur') {
    echo "accès en lecture seule";
} else {
    echo "Rôle inconnu";
}

switch ($role) {
    case 'admin':
        echo 'accès complet autorisé';
        break;
    case 'editeur':
        echo 'accès limité aux modifications';
        break;
    case 'visiteur':
        echo 'accès en lecture seule';
        break;
    default:
        echo 'Rôle inconnu';
        break;
}

// Exercice 2

$jour; 

switch ($jour) {
    case 'Lundi':
    case "Mardi":
    case 'Mercredi':
    case "Jeudi":
    case "Vendredi":
    echo 'jour ouvré';
    break;
    case "Samedi":
    case "Dimanche":
    echo 'Week-end';
    break;
    default:
    echo 'Renseignez un jour de la semaine';
}

//Exercice 3

$status;

$message = match ($status) {
    "en cours" => "Votre commande est en cours de traitement.",
    "expédiée" => "Votre commande a été expédiée.",
    "livrée" => "Votre commande a été livrée.",
    "annulée" => "Votre commande a été annulée.",
    default => "Statut inconnu",
};

echo $message; 

//Exercice 4

$temperature;

$degres = ($temperature < 10) ? "Il fait froid" : (($temperature > 20) ? "Il fait doux" : "Il fait chaud");
echo $degres;

//Exercice 5

const TVA = 0.20;
$size = $argv[1]; 

function taille ($size) {

switch ($size) {
    case "S": 
        $prix = 10;
        break;
    case "M" : 
        $prix = 12;
        break;
    case "L": 
        $prix = 14;
        break;
    case "XL" : 
        $prix = 16;
        break;
    default: 
    echo "Taille inconnue";
    exit(0);
};
$prixTTC = (($prix * TVA) + $prix);
echo "Le prix du t-shirt taille " . $size . " est de " . $prixTTC . " € TTC" . " (" . $prix . " HT € + 20% TVA)"; 
};

taille($size);
