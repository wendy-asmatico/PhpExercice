<?php 

session_start();

$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifiant = $_POST['identifiant'] ?? '';
    $password = $_POST['motdepasse'] ?? '';

    if (empty($identifiant) || empty($password)) {
        echo "Vos champs sont vides";
    } else {

        foreach ($users as $username => $info) {
            if ($identifiant === $username && password_verify($password, $info['password'])) {
                $_SESSION['utilisateur'] = $identifiant;
                $_SESSION['role'] = $info['role'];
                header('Location: dashboard.php');
                exit;  
            }
        }

        header('Location: failer.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link href="style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Prata&display=swap" rel="stylesheet">

</head>
<body>
  <div class="formulaire">
  <h1>Connexion</h1>
  <form method="post">
    <label for="identifiant">Identifiant :</label><br>
    <input type="text" id="identifiant" name="identifiant" ><br>
    <label for="motdepasse">Mot de passe :</label><br>
    <input type="password" id="motdepasse" name="motdepasse"><br>
    <button type="submit">Se connecter</button>
  </form>
  </div>

</body>
</html>
