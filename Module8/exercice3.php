<?php

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";

$groupe = explode(",", $panier);

foreach($groupe as $groupes) {
    $parts= explode(":", $groupes);
    $nettoyer = trim($parts[0]);
    $nom = strtolower($nettoyer);
    $prix = trim($parts[1]);
        if (is_numeric($prix)) {
            $tableaufinal[] = [$nom, $prix];
            $prixtotal += $prix;
        } else {
        }
}

var_dump($tableaufinal);

echo "Il y a ".  count($tableaufinal) . " produit dans le panier \n";
echo "Le prix total du panier est de " . round($prixtotal, 2) . " € \n";
