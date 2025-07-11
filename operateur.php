<?php

$a = 5;
$b = 10;
$c = 3;

$x = true;
$y = false;

// Exercice 1 

echo "La somme de a et b est de " . $a += $b . "\n";
echo "La différence de a et b est de " . $a -= $b . "\n";
echo "Le produit de a et b est de " . $a *= $b . "\n";
echo "Le quotient de a et b est de " . $a /= $b."\n";
echo "Le reste de la division de a par b est de " . $a %= $b . "\n";

// Exercice 2

echo "a == b donne " . ($a == $b ? 'true' : 'false') . "\n";
echo "a != b donne " . ($a != $b ? 'true' : "false") . "\n";
echo "a < b donne " . ($a < $b ? 'true' : 'false') . "\n";
echo "a > b donne " . ($a > $b ? 'true' : 'false') . "\n";
echo "a <= b donne " . ($a <= $b ? 'true' : 'false') . "\n";
echo "a >= b donne " . ($a >= $b ? 'true' : 'false') . "\n";

// Exercice 3

echo "x AND y donne " . (($x && $y) ? 'true' : 'false') . "\n";
echo "x OR y donne " . (($x || $y) ? 'true' : 'false') . "\n";
echo "x XOR y donne " . (($x xor $y) ? 'true' : "false") . "\n";

// Exercice 4

echo "Si j'ajoute A à b, j'obtiens " . $a + $b . "\n";
echo "Si je multiplie b par c, j'obtiens " . $b * $c . "\n";
echo "Si je soustrais c de b, j'obtiens " . $b - $c . "\n";
echo "Le reste de b divisé par c est " . $b % $c . "\n";
