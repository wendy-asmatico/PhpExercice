<?php


$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if(isset($confirmpassword) && isset($password)) {
    if ($password === $confirmpassword) {
        if (strlen($password) >= 6) {
            echo "mot de passe validées \n";
            echo password_hash($password, PASSWORD_BCRYPT);
        } else {
            echo "Votre mot de passe doit faire minimum 6 caractères \n";
        }
    } else {
        echo "Mot de passe non identique \n";
    }
} else {
    echo "Champ vide";

}


