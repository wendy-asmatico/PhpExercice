<?php

$form = [
"nom" => "   ",
"age" => "28",
"email" => ""
];

foreach ($form as $cle => $valeur) {
        trim($valeur);
        $nettoyer = str_replace(' ', '', $valeur);
        if (empty($nettoyer)) {
            echo "Votre champ $cle est vide \n";
    } else{
        echo "Votre champ $cle est OK." . "\n";
    } 
}