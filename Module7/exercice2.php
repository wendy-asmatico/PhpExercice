<?php

$nbr=$argv[1];

function afficheretoile($nbr) {

for ($i=1; $i<=$nbr; $i++) {
    for ($y=1; $y<=$i; $y++) 
        echo "* ";
        echo "\n";
}
}

afficheretoile($nbr);