<?php

$revenu=$argv[1];

function calculimpot($revenu) {

    $impot = 0;

    $tranches = [
    [0, 10000, 0],
    [10001, 20000, 18],
    [20001, 35000, 18],
    [35001, 50000, 25],
    [50001, PHP_INT_MAX, 35]
];

foreach ($tranches as $impottranche) {
    $min = $impottranche[0];
    $max = $impottranche[1];
    $taux = $impottranche[2];

    if ($revenu > $min ) {
        $partimposable = min($revenu, $max) - $min;
        $impot += ($taux / 100) * $partimposable;
    } else {
    }
}

echo "Votre impot est de $impot pour un revenue de $revenu. \n";

}

calculimpot($revenu);


