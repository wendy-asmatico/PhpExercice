
<?php
session_start();

if (!isset($_SESSION['utilisateur'])) {
header('Location: login.php');
    exit;
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
  <h1>Bienvenue <?php echo $_SESSION['utilisateur'] ?> </h1>
  <p>Vous avez le rôle de <?php echo $_SESSION['role'] ?> ! </p>

  <a href="logout.php">Se déconnecter</a>


</body>
</html>


