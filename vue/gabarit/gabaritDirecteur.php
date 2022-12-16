<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Directeur</title>
</head>

<body>
  <h1>
    <?php echo "Bienvenue sur la page directeur " . $nom . " " . $prenom;
    ?>
  </h1>
  <form action="site.php" method="POST">
    <p><input type="submit" name="deconecteDirecteur" value="Déconnexion"></p>
  </form>


  <form action="site.php" method="POST">
    <fieldset>
      <legend>Crée un login et mot de passe pour le médecin</legend>
      <p>
        <label for="">Login: </label>
        <input type="text" name="creelogin">
      </p>
      <p>
        <label for="">Mot de passe: </label>
        <input type="text" name="creepassword">
      </p>
      <p>
        <input type="submit" name="validernewlogin" value="Valider">
      </p>
    </fieldset>
  </form>
  <?php
  if (!empty($afficherCreerSucess)) {
    echo $afficherCreerSucess;
  }
  ?>
  <form action="site.php" method="POST">
    <fieldset>
      <legend>Modifier Information d'Agent</legend>
      <p>
        Pour modifier le login et mot de passe des agents. Tapez sur la bouton "Afficher"
      </p>
      <p>
        <input type="submit" name="modifierLogMotAD" value="Afficher">
      </p>
    </fieldset>
  </form>
  <?php
  if (!empty($contenuModifLogMotAD)) {
    echo $contenuModifLogMotAD;
  }
  ?>
  <form action="site.php" method="POST">
    <fieldset>
      <legend>Modifier Information Du Médecin</legend>
      <p>
        Pour modifier le login et mot de passe des médecins. Tapez sur la bouton "Afficher"
      </p>
      <p>
        <input type="submit" name="modifierLogMotMD" value="Afficher">
      </p>
    </fieldset>
  </form>

  <?php
  if (!empty($contenuModifLogMotMD)) {
    echo $contenuModifLogMotMD;
  }
  ?>
</body>

</html>