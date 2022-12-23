<!DOCTYPE html>
<html lang="en">

<!-- <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Directeur</title>
  <script src="vue/fichier.js" text="text/javascript">

  </script>
</head> -->

<head>
  <title>Bootstrap Exemple (Modifier après)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="vue/fichier.js" text="text/javascript"></script>
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
      <legend>Afficher Information d'Agent</legend>
      <p>
        Cliquez sur la bouton "Afficher". Pour afficher tous les informations d'un agent.
      </p>
      <p>
        <input type="submit" name="afficherPersonnelAD" value="Afficher">
      </p>
    </fieldset>
  </form>
  <form action="site.php" method="POST">
    <fieldset>
      <legend>Afficher Information Médecin</legend>
      <p>
        Cliquez sur la bouton "Afficher". Pour afficher tous les informations d'un médecin </p>
      <p>
        <input type="submit" name="afficherPersonnelMD" value="Afficher">
      </p>
    </fieldset>
  </form>
  <?php
  if (!empty($contenuPersonnelAD)) {
    echo $contenuPersonnelAD;
  }
  ?>
  <?php
  if (!empty($contenuPersonnelMD)) {
    echo $contenuPersonnelMD;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Modifier les renseignements sur l’agent ou le médecin</legend>
      <p>
        Pour modifier les renseignements. Veuillez entrer son ID pour effectuer le changement.<br>
        <i>Si vous ne connaissez pas le numéro ID d’agent, cliquez sur le bouton Afficher dans la formule ci-dessus pour le trouver.</i>
      </p>
      <p>
        <label>ID: </label><input type="text" name="idPersonnelD">
        <input type="submit" name="modifInforPersonnelD" value="Valider">
      </p>
    </fieldset>
  </form>

  <?php
  if (!empty($contenuModifLogMotAD)) {
    echo $contenuModifLogMotAD;
  }
  ?>

  <?php
  if (!empty($contenuModifLogMotMD)) {
    echo $contenuModifLogMotMD;
  }
  ?>
  <?php
  if (!empty($afficherModifierSucess)) {
    echo  $afficherModifierSucess;
  }
  ?>

  <form action="site.php" method="POST" id="form6">
    <fieldset>
      <legend>
        Créer un motif RDV
      </legend>
      <p>
        <label for="">Nom motif:</label>
        <input type="text" name="nomMotif">
      </p>
      <p>
        <label for=""> Prix motif:
        </label>
        <input type="text" name="prixMotif">
      </p>
      <p>
        <i>Veuillez cliquer sur la bouton "Afficher" pour afficher tous les pièces. Ensuite, Vous choisissez les pièces qui corespondent à chaque motif. </i>
        <input type="submit" name="afficherPiece" value="Afficher">
        <?php
        if (!empty($afficherTousLesPieces)) {
          echo  $afficherTousLesPieces;
        }
        ?>
      </p>
      <p>
        <input type="submit" name="validerMotif" value="Valider">
      </p>
    </fieldset>
  </form>
  <?php
  if (!empty($afficherCreerMotifSucess)) {
    echo $afficherCreerMotifSucess;
  }
  ?>


</body>

</html>