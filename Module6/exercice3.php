<?php

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

echo "<table border='1'
    style='border-collapse: collapse; width: 50%; margin: auto; text-align: center;'>";
        echo "<tr><th>Nom</th><th>Prix</th><th>Stock</th><th>CA Potentiel</th></tr>";
            foreach ($produits as $clef => $produit){
                foreach($produit as $caracteristique => $valeur){
                }
                $caPotentiel = $produit['prix'] * $produit['stock'];
                echo "<tr>";
                echo "<td>" . $produit['nom'] . "</td>"; 
                echo "<td>" . $produit['prix'] . " €</td>";
                echo "<td>" . $produit['stock'] . "</td>";
                echo "<td>" . $caPotentiel . " €</td>";
                echo "</tr>";
            }
echo "</table>";
