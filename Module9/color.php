<?php

$color = $_POST['couleur'];

    if ($color === 'bleu') {
        echo "<h1 style='color:blue'> Vous avez choissis la couleur " . $color . "</h1>";
    } elseif ($color === 'vert') {
        echo "<h1 style='color:green'> Vous avez choissis la couleur " . $color . "</h1>";
    } elseif ($color === 'rouge') {
        echo "<h1 style='color:red'> Vous avez choissis la couleur " . $color . "</h1>";
    } else{

    };

    