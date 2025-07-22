<?php   

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = '';
}



echo "<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='utf-8'>
    <title>Formulaire</title>
    <meta name='description' content='Roughly 155 characters'>
    <link rel='stylesheet'type='text/css' href='style.css'>
</head>
<body> <h1> Bonjour " . $nom . " !</h1><br>";



