<?php

$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

$impayée = 0;

foreach ($commandes as $cle => $valeur) {
        echo "Commande de " . $valeur["client"] . " : " .  $valeur["montant_ht"]. "€ HT, " . ($valeur["montant_ht"]*0.2)+$valeur["montant_ht"] . "€ TTC - " . $valeur["statut"] . "\n";
        if ( $valeur["statut"] == "en attente") {
            $impayée+=$valeur["montant_ht"];
            }
}

    $prixHT = array_column($commandes, "montant_ht" );
    $prixsum = array_sum($prixHT);
    echo "Le chiffre d'affaire est de ". $prixsum . "€ HT. \n";

    $prixTTC = ($prixsum*0.2) + $prixsum;
    echo "Le chiffre d'affaire est de ". $prixTTC . "€ TTC \n";

    echo "Le % de CA encore a réglé est de " . round(($impayée/$prixsum)*100);

