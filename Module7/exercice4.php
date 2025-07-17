<?php 

function rechercher($eleve, $classe) {
    foreach ($classe as $etudiant) {
        if ($etudiant["prenom"] === $eleve) {
        $moyenne = round(($etudiant["maths"] + $etudiant["francais"] + $etudiant["histoire"])/3, 1);
        echo "la moyenne de " . $etudiant["prenom"]. " est de : " .  $moyenne . "\n";
            return;
        }
    }
    echo "Élève non trouvé.";
}
$eleve = $argv[1];

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

rechercher($eleve, $classe);
