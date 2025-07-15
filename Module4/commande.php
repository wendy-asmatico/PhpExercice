<?php


$status=$argv[1];

function commande($status) {
    $message = match ($status) {
    "cours" => "Votre commande est en cours de traitement.",
    "expédiée" => "Votre commande a été expédiée.",
    "livrée" => "Votre commande a été livrée.",
    "annulée" => "Votre commande a été annulée.",
    default => "Statut inconnu",
};
print_r($message);
}

commande($status);