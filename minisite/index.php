<?php 

$title = "Accueil";
$css = "index.css";
require_once 'includes/header.php';
?>

<main>
<h1>Bienvenue dans la présentation de PHP ! </h2>
    <div class="pres">
    <p>Vous vous demandez comment les sites web comme Facebook ou Wikipédia fonctionnent en coulisses ? 
        Derrière ces pages dynamiques se cache souvent un langage incontournable : le PHP.</p>
    <img src="./assets/img/php.png" alt="icon php" id="pngPhp"/>
</div>

<hr>

    <div class="description">
        <h2>Qu'est ce que PHP ? </h2>
    <p> <mark>PHP (Hypertext Preprocessor)</mark> est un langage de programmation utilisé pour créer des sites web dynamiques. Il a été inventé en 1994 par <mark>Rasmus Lerdorf</mark> et est aujourd’hui très répandu dans le monde du développement web.
Contrairement au HTML qui affiche uniquement du contenu "statique", PHP permet de rendre les <mark>pages web interactives</mark> : 
<br>- afficher l'heure <br> - gérer des formulaires <br> - se connecter à une base de données <br> - afficher des profils d’utilisateurs <br> - etc...<br></p>
<p>PHP s’exécute sur le serveur : le code PHP est traité <mark>avant</mark> que la page ne s’affiche dans le navigateur.
PHP est facile à apprendre pour les débutants. Il s’intègre bien avec le HTML et fonctionne avec de nombreux systèmes de gestion de bases de données comme <mark>MySQL</mark>. Des plateformes très connues comme <mark>WordPress</mark>, <mark>Facebook</mark> ou encore <mark>Wikipédia</mark> utilisent <mark>PHP.</mark><br>
En résumé, PHP est un excellent point de départ pour les personnes qui veulent apprendre à créer des sites <mark>web dynamiques</mark> et comprendre le fonctionnement des applications web <mark>côté serveur.</mark></p>
<p>Ici, vous retrouverez les principales notions de PHP que j’ai abordées au cours de mon apprentissage. Je vous présenterai les bases du langage, quelques exemples concrets de son utilisation, ainsi qu’un retour personnel sur ce que j’ai compris, ce qui m’a posé des difficultés, et comment j’ai progressé.</p>
</div>

</main>

<?php include 'includes/footer.php'; ?>

