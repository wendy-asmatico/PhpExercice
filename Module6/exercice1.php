<?php 

$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

echo $villes[4] . " \n";
$villes[0]="Nice";
$villes[]="Reims";

echo "Il y a " . count($villes) . " ville dans le tableau \n";

foreach ($villes as $ville) {
    echo $ville . " \n";
}