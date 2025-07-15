<?php

$jour=$argv[1];

function jour($jour) {

    switch ($jour) {
    case 'Lundi':
    case "Mardi":
    case 'Mercredi':
    case "Jeudi":
    case "Vendredi":
    echo 'jour ouvré';
    break;
    case "Samedi":
    case "Dimanche":
    echo 'Week-end';
    break;
    default:
    echo 'Renseignez un jour de la semaine ou mettez une majuscule';
}
}

jour($jour);