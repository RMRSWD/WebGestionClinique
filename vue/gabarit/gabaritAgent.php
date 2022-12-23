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
      <legend>Modifier les informations du patient</legend>
      <form action="site.php" method="POST">
        <p>Pour trouver et modifier un patient saisir nom et prénom et taper "Chercher".</p>
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




  <form action="site.php" medthod="POST" name="form4">
    <fieldset>
      <legend> Prend un RDV </legend>
      <p>
        <label for="">Nom du médicin</label>
        <input type="text" name="nommedicin" value="">
      </p>
      <p>
        <label for="">Prénom du médicin</label>
        <input type="text" name="prenommedicine" value="">
      </p>
      <p>
        Choisi Specialité </br>
        <select name="specialite" id="Specialite">
          <option value="Specialie1" name="Specialie1">Specialité A</option>
          <option value="Specialie2" name="Specialie2">Specialité B</option>
          <option value="Specialie3" name="Specialie3">Specialité C</option>
        </select>
      </p>
      <p>Jour et heure<br>
        <input type="datetime-local" name="datetime"><br>
      </p>
      <p><input type="submit" value="check" name="check"></p>


  </form>
  <form action="site.php" medthod="POST" name="form5">
    <p> Motif </br>
      <select name="motif" id="motif">
        <option name="consultation" value="Consultation" onclick="consultation('consultation')">Premier Consultation</option>
        <option name="biopsie" id="Biopsie" onclick="biopsie('biopsie')">Biopsie</option>
      </select>
    </p>
    <p><input type="button" value="prendrdv" name="prendrdv"></p>
    </fieldset>

  </form>



</body>


</html>