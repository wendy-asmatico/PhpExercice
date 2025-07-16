<?php

$moyenne= 0;

$eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

foreach ( $eleves as $cle => $valeur ) {
            echo "$cle a obtenue $valeur/20 \n";
            if ($valeur >= 10 ) {
                $moyenne++;
            }
}
echo "$moyenne élèves ont obtenue la moyenne";

