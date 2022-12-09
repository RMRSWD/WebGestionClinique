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
    Bienvenue sur la page d'agent
  </h1>

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
        <input type="text" name="numtel">
      </p>
      <!-- <p>
        <label for="">Département de naissance: </label>
        <input type="text" name="departementdenaissance">
      </p> -->
      <p>
        Dans quel département habitez-vous ?<br />
        <select name="departementdenaissance">
          <option value="Orléans" selected>Orléans</option>
          <option value="Paris">Paris</option>
          <option value="Toulouse">Toulouse</option>
          <option value="" name="saisirEtranger" onclick="saisirPaysEtranger('saisirPaysEtranger')">99 </option>
        </select>
      <p id="saisirPaysEtranger">

      </p>
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

  <form action="site.php" method="POST">
    <fieldset>
      <legend>Modifier les information du patient</legend>
    </fieldset>
  </form>

</body>


</html>