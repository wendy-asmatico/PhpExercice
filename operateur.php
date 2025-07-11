<?php

$a = 5;
$b = 10;
$c = 3;

$x = true;
$y = false;

// Exercice 1 

echo "La somme de a et b est de " . ($a += $b) . "<br>";
echo "La différence de a et b est de " . ($a -= $b). "<br>";
echo "Le produit de a et b est de " . ($a *= $b) . "<br>";
echo "Le quotient de a et b est de " . ($a /= $b). "<br>";
echo "Le reste de la division de a par b est de " . ($a %= $b) .  "<br>";

// Exercice 2

echo "a == b donne " . ($a == $b ? 'true' : 'false') . "<br>";
echo "a != b donne " . ($a != $b ? 'true' : "false") . "<br>";
echo "a < b donne " . ($a < $b ? 'true' : 'false') . "<br>" ;
echo "a > b donne " . ($a > $b ? 'true' : 'false') . "<br>" ;
echo "a <= b donne " . ($a <= $b ? 'true' : 'false') . "<br>";
echo "a >= b donne " . ($a >= $b ? 'true' : 'false') . "<br>";

// Exercice 3

echo "x AND y donne " . (($x && $y) ? 'true' : 'false') . "<br>";
echo "x OR y donne " . (($x || $y) ? 'true' : 'false') . "<br>" ;
echo "x XOR y donne " . (($x xor $y) ? 'true' : "false") . "<br>";

// Exercice 4

echo "Si j'ajoute A à b, j'obtiens " . ($a + $b) ."<br>";
echo "Si je multiplie b par c, j'obtiens " . ($b * $c) . "<br>";
echo "Si je soustrais c de b, j'obtiens " . ($b - $c) ."<br>";
echo "Le reste de b divisé par c est " . ($c % $b) . "<br>";