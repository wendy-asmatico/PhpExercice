<?php

$temperature=$argv[1];

function meteo($temperature) {

$degres = ($temperature < 10) ? "Il fait froid" : (($temperature < 20) ? "Il fait doux" : "Il fait chaud");
print_r($degres);

};

meteo($temperature);