<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title><?= $title ?? "Mon site" ?></title>
<link rel="stylesheet" href="./assets/css/common.css">
<?php if (!empty($css)): ?>
<link rel="stylesheet" href="./assets/css/<?= htmlspecialchars($css) ?>">
<?php endif; ?>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

</head>
<body>
<header>
<nav>
<a href="index.php">Accueil</a>
<a href="modules.php">Les Modules</a>
<a href="evaluation.php">Mon evaluation</a>
</nav>
</header>