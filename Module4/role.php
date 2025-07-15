<?php

$role=$argv[1];

function role($role) {
if ($role == 'admin') {
    echo "accès complet autorisé";
} elseif ($role == 'editeur') {
    echo "accès limité aux modifications";
} elseif ($role == 'visiteur') {
    echo "accès en lecture seule";
} else {
    echo "Rôle inconnu";
};

switch ($role) {
    case 'admin':
        echo 'accès complet autorisé';
        break;
    case 'editeur':
        echo 'accès limité aux modifications';
        break;
    case 'visiteur':
        echo 'accès en lecture seule';
        break;
    default:
        echo 'Rôle inconnu';
        break;
};
}

role($role);