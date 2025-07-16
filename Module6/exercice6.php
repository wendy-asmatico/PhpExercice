<?php

$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

foreach ( $eleves as $nom => $note) {
    $moyenne = round(($note["maths"] + $note["francais"] + $note["anglais"])/3, 1);
    echo "la moyenne de " . $nom . " est de : " .  $moyenne;
    if ($moyenne < 10 ) {
        echo " - Echec de l'éleve \n ";
    } elseif ($moyenne >= 10 && $moyenne <= 12) {
        echo " - L'éléve peut mieux faire ! \n ";

    } elseif ( $moyenne >= 12 && $moyenne <= 15) {
        echo " - Beau travail ! \n ";
    } else {
    echo " - Excellent Travail ! \n ";
    }

$math = 0; 
$francais=0;
$anglais=0;

}

foreach ( $eleves as $nom => $note) {
$math += $note["maths"];
$francais += $note["francais"];
$anglais += $note["anglais"];
}

echo "La moyenne de Math est de " . round(($math/3),1) . " /20\n";
echo "La moyenne de Français est de " . round(($francais/3),1) . "/20\n";
echo "La moyenne d'Anglais est de " . round(($anglais/3),1) . "/20\n";






