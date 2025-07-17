<?php

$nombre1=$argv[1];
$nombre2=$argv[2];


function pair($nombre1, $nombre2) {

    if ($nombre1 % 2 == 0 && $nombre2 % 2 == 0 ) {
        for($i=$nombre1; $i <= $nombre2; $i +=2 ) {
        echo $i . "\n";
    } 
} elseif ($nombre1 % 2 == 1 && $nombre2 % 2 == 1 ) {
    for($i=$nombre1; $i <= $nombre2; $i +=2 ) {
        echo $i . "\n";
}
} else {
    echo "nombre incorrecte";
}
}

pair($nombre1, $nombre2);