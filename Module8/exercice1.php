<?php   

$chaine = "12,5,abc,32,-7,42";

$tableau = explode(",", $chaine);
$nombre=0;

var_dump($tableau);

foreach ($tableau as $valeur) {
    if (is_numeric($valeur)) {
        $nombre+= $valeur;
        $entier = intval($nombre);
        echo $entier . "\n";
        $Newtableau[] = $entier;
        $entier = 0;
        $nombre = 0;
    } else {

    }
}

    var_dump($Newtableau);
echo 'Le plus petit nombre est '  . min($Newtableau) . "\n";
echo 'Le plus grand nombre est ' . max($Newtableau);