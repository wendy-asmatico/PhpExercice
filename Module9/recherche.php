<?php

if (isset($_GET['search'])) {
    $recherche= $_GET['search'];
} else {
    $nom = '';
}


echo $recherche;
