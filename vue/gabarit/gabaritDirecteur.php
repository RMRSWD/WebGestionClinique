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
    <?php
    session_start();
    echo "Bienvenue sur la page directeur " . $nom . " " . $prenom;

    ?>
  </h1>
  <form action="site.php" method="POST">
    <p><input type="submit" name="deconecteDirecteur" value="Déconnexion"></p>
  </form>


  <form action="site.php" method="POST">
    <fieldset>
      <legend>Crée un login et mot de passe pour le médecin l'agent et directeur</legend>
      <p>
      <p>
        <i>Vous choisissez un des trois genre
          <li>M -> Médecin</li>
          <li>A -> Agent</li>
          <li>D -> Directeur</li>
        </i>
      </p>
      <label for="">Genre: </label>
      <input type="text" name="genre">
      </p>
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
  <?php
  if (!empty($contenuPersonnelAD)) {
    echo $contenuPersonnelAD;
  }
  ?>
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
  if (!empty($contenuPersonnelMD)) {
    echo $contenuPersonnelMD;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Modifier les renseignements sur l’agent ou le médecin et le directeur</legend>
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
  if (!empty($contenuModifLogMotD)) {
    echo $contenuModifLogMotD;
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
      <!-- <p>
        <label for="">Piece fournit: </label>
      <p>Indiquez le nombre piece fournit pour ce motif</p>
      <input type="text" name="nombrePiece"> -->
      <p><label for="">Donnez nombre pièce fournit:</label> <input type="text" name="z1" />
        <input type="button" value="Executer" onclick="nbPiece()" />
      </p>

      <div id="f2"></div>

      <p><label for="">Donnez nombre consigne:</label> <input type="text" name="z2" />
        <input type="button" value="Executer" onclick="nbConsigne()" />
      </p>

      <div id="f3"></div>

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

  <form action="site.php" method="POST" name="form7">
    <fieldset>
      <legend>Modifier Motif RDV</legend>
      <p>
        Veuillez saisir un ID du motif RDV pour effectuer le modifier
      </p>
      <p>
        <label for="">ID Motif: </label>
        <input type="text" name="idMotif" value="">
        <input type="submit" name="validerIDMotif" value="Valider">
      </p>
    </fieldset>

  </form>
  <?php
  if (!empty($afficherModifierMotif)) {
    echo $afficherModifierMotif;
  }
  ?>
  <!-- <?php
        // if (!empty($afficherModifierPieceMotif)) {
        //   echo $afficherModifierPieceMotif;
        // }
        ?> -->



  <?php
  if (!empty($afficherModifierMotifSucess)) {
    echo $afficherModifierMotifSucess;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Supprimer Un Motif</legend>
      <p>
        Veuillez saisir la libelle du motif rendez-vous pour effectuer le supprimer
      </p>
      <p>
        <label for="">Libelle Motif: </label>
        <input type="text" name="libelleMotifSD" value="">
        <input type="submit" name="supprimerMotif" value="Valider   ">
      </p>
    </fieldset>
  </form>

  <?php
  if (!empty($afficherSupprimerMotifSucess)) {
    echo $afficherSupprimerMotifSucess;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Créer nom , prénom et sprécialité d'un médecin</legend>
      <p>
        <i>Veuillez fournir un ID de médecin. Cette partie associent aux login et mot de passe que vous avez créés précédemment.</i></br>
        <label for="">Id Médecin: </label>
        <input type="text" name="numMedecin">
      </p>
      </p>
      <p>
        <label for="">Nom Médecin: </label>
        <input type="text" name="nomMedecin">
      </p>
      <p>
        <label for="">Prénom Médecin: </label>
        <input type="text" name="prenomMedecin">
      </p>
      <p>
        <label for="">Spécialité Médecin: </label>
        <input type="text" name="specialiteMedecin">
      </p>
      <p>
        <input type="submit" name="ValiderCreerUnMedecin" value="Valider">
      </p>
    </fieldset>
  </form>

  <?php
  if (!empty($afficherCreerNomPrenomSpecialiteSucess)) {
    echo $afficherCreerNomPrenomSpecialiteSucess;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Supprimer Un Médecin</legend>
      <p>
        <i>
          Veuillez saisir ID de médecin pour effectuer cette action.
        </i></br>
      </p>
      <p>
        <label for="">ID Médecin:</label>
        <input type="text" name="id_MedecinSupprimer">
      </p>
      <p>
        <input type="submit" name="supprimerMedecin" value="Supprimer">
      </p>
    </fieldset>
  </form>

  <?php
  if (!empty($afficherCreerNomPrenomSpecialiteSucess)) {
    echo $afficherCreerNomPrenomSpecialiteSucess;
  }
  ?>



</body>

</html>