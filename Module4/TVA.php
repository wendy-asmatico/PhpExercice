<?php 


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