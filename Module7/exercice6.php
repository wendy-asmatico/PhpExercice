<?php

$nombre=$argv[1];

function multiplication($nombre) {
for ($i = 0; $i <= 10; $i += 1) {
    echo $nombre . " x " . $i . " = " . $i*$nombre . "\n";
}
}

multiplication($nombre);