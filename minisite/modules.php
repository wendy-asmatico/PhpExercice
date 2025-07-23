<?php

$title = "Les Modules";
$css = "modules.css";
require_once 'includes/header.php';

$modules = [
    [ 'titre' => 'Module 1', 'contenu' => [ 'Présentation de PHP', 'Syntaxe de base', 'Intégrer du PHP à HTML', 'Lancer un serveur local' ] ],
    [ 'titre' => 'Module 2', 'contenu' => [ 'Découverte des variables', 'Découverte des constantes', 'Les différents types', 'Concaténer' ] ],
    [ 'titre' => 'Module 3', 'contenu' => [ 'Les opérateurs arithmétiques', 'Les opérateurs de comparaison', 'Les opérateurs logiques', 'incrémentation et décrémentation' ] ],
    [ 'titre' => 'Module 4', 'contenu' => [ 'Condition IF', 'Condition IF … ELSE', 'Condition SWITCH', 'Condition MATCH' ] ],
    [ 'titre' => 'Module 5', 'contenu' => [ 'Boucle WHILE', 'Boucle DO...WHILE', 'Boucle FOR', 'Boucle infinies' ] ],
    [ 'titre' => 'Module 6', 'contenu' => [ 'Tableau indexé', 'Tableau associatif', 'Les fonctions array', 'Boucle FOREACH' ] ],
    [ 'titre' => 'Module 7', 'contenu' => [ 'Declarer une fonction', 'Appeler une fonction', 'Les paramètres', 'Porter GLOBAL' ] ],
    [ 'titre' => 'Module 8', 'contenu' => [ 'Fonction des chaînes de caractère', 'Fonction sur les nombres', 'Autre fonction', 'Fonction de débogage' ] ],
    [ 'titre' => 'Module 9', 'contenu' => [ 'SUPERGLOBALE', 'Fonction sur les nombres', '$_POST ou $_GET', 'valider et assainir les données' ] ],
    [ 'titre' => 'Module 10', 'contenu' => [ 'SESSION_START()', 'HEADER()', 'VERIFY_PASSWORD()', 'création du login' ] ],
    [ 'titre' => 'Module 11', 'contenu' => [ 'Manipulation des fichiers', 'Terminal', 'Organiser ses projets', 'Lancer une fonction' ] ],
    [ 'titre' => 'Module 12', 'contenu' => [ 'Templing', 'INCLUDE_ONCE', 'REQUIRE_ONCE', 'Mixe PHP et HTML' ] ],
];

?>

<main>

    <h1>Les modules </h1>
    <hr>
    <div class="content">
<?php
foreach ($modules as $module) {
    echo "<div class='modules'>";
    echo "<h2>{$module['titre']}</h2><ul>";
    foreach ($module['contenu'] as $item) {
        echo "<li> - $item</li>";
    }
    echo "</ul>";
    echo "</div>";
}
?>
</div>
    <hr>

</main>

<?php include 'includes/footer.php'; ?>
