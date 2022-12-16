<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Medecin</title>
</head>

<body>
  <h1>
    <?php
    echo "Bienvenue sur la page de medecin " . $nom . " " . $prenom;

    ?>
  </h1>
  <form action="site.php" method="POST">
    <input type="submit" name="deconnexionMedecin" value="Déconnexion">
  </form>
</body>

<?php
if (!empty($contenue)) {
  echo $contenue;
}

?>


</html>