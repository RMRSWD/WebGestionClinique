<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Agent</title>
  <script src="vue/fichier.js" text="text/javascript">

  </script>

</head>

<body>
  <h1>
    <?php
    echo "Bienvenue sur la page d'agent " . $nom . " " . $prenom;

    ?>
  </h1>
  <form action="site.php" method="POST">
    <p><input type="submit" name="deconecte" value="Déconnexion"></p>
  </form>


  <form action="site.php" method="POST" name="form1">
    <fieldset>
      <legend>Créer un nouveau patient</legend>
      <p>
        <label for="">Nom:</label>
        <input type="text" name="nom">
      </p>
      <p>
        <label for="">Prenom:</label>
        <input type="text" name="prenom">
      </p>
      <p>
        <label for="">Numéro de sécurité social: </label>
        <input type="text" name="nss">
      </p>
      <p>
        <label for="">Date de naissance: </label>
        <input type="date" name="datenaissance">
      </p>
      <p>
        <label for="">Adresse:</label>
        <input type="text" name="adresse">
      </p>
      <p>
        <label for="">Numéro de téléphone:</label>
        <input type="text" name="numtel" maxlength="10">
      </p>
      <p>
        Dans quel département habitez-vous ?<br />
        <select name="departementdenaissance">
          <option value="Orléans" selected>Orléans</option>
          <option value="Paris">Paris</option>
          <option value="Toulouse">Toulouse</option>
          <option value="" name="saisirEtranger" onclick="saisirPaysEtranger('saisirPaysEtranger')">99 </option>
        </select>
      <p id="saisirPaysEtranger"></p>
      </p>
      <p>
        <label for="">Solde du patient: </label>
        <input type="text" name="deposer">
      </p>
      <p>
        <input type="submit" value="Créer un patient" name="creerunpatient">
        <input type="reset" value="Effacer" name="effacer">
      </p>


    </fieldset>
  </form>
  <?php
  if (!empty($contenu)) {

    echo $contenu;
  }
  ?>

  <form action="site.php" method="POST" name="form2">
    <fieldset>
      <legend>Rechercher ou Modifier les informations du patient</legend>
      <form action="site.php" method="POST">
        <p>Pour rechercher ou modifier un patient saisir nom et prénom et taper "Chercher".</p>
        <p>
          <label for="nom">Nom:</label>
          <input type="text" name="nom">
        </p>
        <p>
          <label for="prenom">Prénom:</label>
          <input type="text" name="prenom">
        </p>
        <p>
          <input type="submit" value="Chercher" name="chercher">
        </p>
      </form>
    </fieldset>
  </form>
  <?php
  if (!empty($afficherpatient)) {
    echo $afficherpatient;
  }
  ?>
  <?php
  if (!empty($afficherModifierAvecSucess)) {
    echo $afficherModifierAvecSucess;
  }
  ?>
  <?php
  if (!empty($afficherErreurChiffre)) {
    echo $afficherErreurChiffre;
  }
  ?>
  <form action="site.php" method="POST" name="form6">
    <fieldset>
      <p>Vous saisissez nom et prénom de patient Ou la date de naissance de patient pour chercher son NSS</p>
      <i>Attention: Pas mettre les trois champs dans même temp</i>
      <legend>Chercher NSS d'un patient</legend>
      <p>
        <label for="">Nom: </label>
        <input type="text" name="chercherNomPatient">
      </p>
      <p>
        <label for="">Prénom: </label>
        <input type="text" name="chercherPrenomPatient">
      </p>
      <p>OU</p>
      <p>
        <label for="">Date de naissance: </label>
        <input type="date" name="chercherDateNaissancePatient">
      </p>
      <p>
        <input type="submit" name="validerChercherNSSPatient" value="Chercher">
      </p>
    </fieldset>

  </form>
  <?php
  if (!empty($afficherNSSPatient)) {
    echo $afficherNSSPatient;
  }
  ?>


  <form action="site.php" method="POST" name="form3">
    <fieldset>
      <legend> Afficher la synthèse d'un patient</legend>
      <hr>
      <p>Saisir le NSS du patient pour afficher la synthèse</p>
      <hr>
      <p>
        <label for="">NSS: </label>
        <input type="text" name="nss2">
      </p>
      <p>
        <input type="submit" name="affichersynthese" value="synthèse patient">
      </p>
    </fieldset>
  </form>
  <?php
  if (!empty($affichersynthesepatient)) {
    echo $affichersynthesepatient;
  }
  ?>




  <form action="site.php" method="POST">
    <fieldset>
      <legend>
        Gestion de dépôt l'argent pour un patient
      </legend>
      <p>
        Saisissez le numéro NSS pour effectuer cette action
      </p>
      <p>
        <label for="">NSS:</label>
        <input type="text" name="nssDepot">
      </p>
      <p>
        <label for="">Montant</label>
        <input type="text" name="montantDepot">
      </p>
      <input type="submit" name="valideNssDepot" value="Valider">
    </fieldset>
  </form>

  <?php
  if (!empty($afficherAjouterSoldeAvecSuccess)) {
    echo $afficherAjouterSoldeAvecSuccess;
  }
  ?>

  <form action="site.php" method="POST">
    <fieldset>
      <legend>
        Effectuer le payement
      </legend>
      <p>
        Saisissez ici la libellé du motif RDV pour voir le prix
      </p>
      <p>
        <label for="">Nom Du Motif:</label>
        <input type="text" name="libelleMotifPayement">
      </p>
      <p>
        <input type="submit" name="validePayementMotifRDV" value="Valider">
      </p>

    </fieldset>
  </form>

  <?php
  if (!empty($afficherPrixMotifRDV)) {
    echo $afficherPrixMotifRDV;
  }
  ?>

  <?php
  if (!empty($afficherPayerAvecSuccess)) {
    echo $afficherPayerAvecSuccess;
  }
  ?>

  <?php
  if (!empty($afficherPayementPasSuccess)) {
    echo $afficherPayementPasSuccess;
  }
  ?>


  <form action="site.php" method="POST" name="form4">
    <fieldset>
      <legend> Prend un RDV </legend>
      <p>
        <label for="">Nom du patient</label>
        <input type="text" name="nomPatientPrendRDV" value="">
      </p>
      <p>
        <label for="">Prénom du patient</label>
        <input type="text" name="prenomPatientPrendRDV" value="">
      </p>
      <p>
        <label for="">Nom du médicin</label>
        <input type="text" name="nomMedicinPrendRDV" value="">
      </p>
      <p>
        <label for="">Prénom du médicin</label>
        <input type="text" name="prenomMedicinePrendRDV" value="">
      </p>
      <p>
        <label for="">Spécialité du médecin</label>
        <input type="text" name="specialiteMedecinPrendRDV">
      </p>
      <p>Jour et heure <br>
        <input type="datetime-local" name="datePrendRDV"><br>
      </p>
      <p><input type="submit" name="verifierRDV" value="Vérifier"></p>

      <?php
      if (!empty($afficherToutMotif)) {
        echo $afficherToutMotif;
      }
      ?>
      <?php
      if (!empty($afficherEnregisterSuccess)) {
        echo $afficherEnregisterSuccess;
      }
      ?>
      <?php
      if (!empty($afficherPiecesEtConsignes)) {
        echo $afficherPiecesEtConsignes;
      }
      ?>


    </fieldset>

  </form>
  <?php
  if (!empty($afficherErreurSPPasCorrespondre)) {
    echo $afficherErreurSPPasCorrespondre;
  }
  ?>


  <form action="site.php" method="POST">
    <fieldset>
      <legend> Voir les rendez-vous </legend>
      <p> Visualier tous les RDV en statut "en attendant de payement". Pour faire cela vous saisissez dans le champ au-dessous le numéro NSS du patient.</p>
      <p>
        <label for="">NSS:</label>
        <input type="text" name="nssRDVEnAttendantPay">
      </p>
      <p>
        <input type="submit" name="validerNSSRDVEnAttendantPay" value="Valider">
      </p>

    </fieldset>
  </form>
  <?php
  if (!empty($afficherRDVPasPayer)) {
    echo $afficherRDVPasPayer;
  }
  ?>









</body>


</html>