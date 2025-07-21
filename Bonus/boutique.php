

<?php

$commandes = [
['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00, 'etat' => 'impayé'],
['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
];

$coutsProduction = [
    'Invisibilité'   => 15.00,
    'Explosion'      => 10.00,
    'Mémoire'        => 14.00,
    'Courage'        => 12.00,
    'Puissance'      => 18.00,
    'Rêves'          => 13.00,
    'Charme'         => 11.00,
    'Métamorphose'   => 20.00,
    'Loup-Garou'     => 22.00,
    'Caméléon'       => 16.00,
    'Sérénité'       => 25.00,
    'Concentration'  => 17.00,
];

echo " &#128230; Nombre total de commande : " . count($commandes) . "<br>";

    $impayé = 0;
    $preparation=0;
    $CA = 0;
    $CAimpayé= 0;
    $CApreparation= 0;


foreach ($commandes as $cle => $valeur) {
    if ($valeur['etat'] == "impayé") {
        $impayé++;
    } elseif ($valeur['etat'] == "préparation"){
        $preparation++;
    }

}

$noms = array_column($commandes, 'client');
$noms_uniques = array_unique($noms);
$nombre_clients_uniques = count($noms_uniques);

echo " &#128184; Nombre total de commande impayé : " . $impayé . "<br>";
echo " &#128229; Nombre total de commande en préparation : " . $preparation . "<br>";
echo "&#128101; Nombre de clients uniques : " . $nombre_clients_uniques  . "<br>";

    foreach ($commandes as $cle => $valeur) {
        if ($valeur['etat'] == "payé") {
            $CA += $valeur['prix'];
        } elseif ($valeur['etat'] == "impayé") {
            $CAimpayé += $valeur['prix'];
        } elseif ($valeur['etat'] == "préparation") {
            $CApreparation += $valeur['prix'];
    } else {

    }
}

    echo "&#128176; Le CA total est de " . $CA .  " € <br>";
    echo "&#128202; Le CA non payé est de " . $CAimpayé . " € qui représente " . round(($CAimpayé/$CA)*100, 1) . "% du CA Total <br>";
    echo "&#128202; Le CA des commandes en preparation est de " . $CApreparation . " € qui représente " . round(($CApreparation/$CA)*100, 1) . "% du CA Total <br>";

$potion = array_column($commandes, 'potion');
$potioncompte=array_count_values($potion);
$cout =0;

foreach($potioncompte as $nom => $nombre) {
    foreach ($coutsProduction as $nompotion => $prix) {
        if ($nom == $nompotion) {
            $production=$nombre*$prix;
            $cout += $production;            
        }
    }
}

echo "&#128201; Le bénéfice des potions est de " . $CA - $cout . " € <br>";

