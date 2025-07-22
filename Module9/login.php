<?php

$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je';

$id = $_POST['indentifiant'];
$password = $_POST['password'];

if (isset($id) && isset($password)) {
    if ($id === $identifiantEnregistre && password_verify($password, $motdepasseHash)) {
        echo "Connexion validée";
    } else {
        echo 'Mauvais mot de passe ou mauvais identifiant';
    }
} else {
    echo "Vos champs sont vides";
}
