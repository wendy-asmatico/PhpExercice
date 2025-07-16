<?php 

$temperatures = [30, 32, 34, 30, 35, 34, 31];

$somme = array_sum($temperatures);
$nombre = count($temperatures);

$moyenne = $somme/$nombre;

echo "Il y a $nombre température relevé \n";
echo "La température moyenne est de " . round($moyenne) . "degrès \n";

