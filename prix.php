<?php

const TVA = 0.2;
$prixHT = 100;
$prixTTC = ($prixHT * 0.2)  + $prixHT;

echo "Le prix TTC est de " . $prixTTC . " euros.";