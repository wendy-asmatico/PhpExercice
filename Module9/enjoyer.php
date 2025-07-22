<?php


if (isset($_POST['passion'])) {
        $passion = $_POST['passion'];
    if (count($passion) >= 2) {
    foreach ($passion as $interet) {
        echo "<ul><li>" . htmlspecialchars($interet) . "</li> </ul> <br>";
    }
    } else {
            echo "Selectionnez au moins 2 passions";
    }
} else {
    echo "Aucune donnée séléctionné";
}

