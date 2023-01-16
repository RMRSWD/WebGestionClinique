<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Medecin</title>
  <script src="vue/fichier.js" text="text/javascript"></script>
  <link rel="stylesheet" href="vue/gabarit/style.css">
</head>

<body>
  <h1>
    Bienvenue sur la page de medecin
  </h1>
  <form action="site.php" method="POST">
    <input type="submit" name="deconnexionMedecin" value="Déconnexion">
  </form>

  <form action="site.php" method="POST" name="form2">
    <fieldset>
      <legend>Bloquer une date pour RDV Administratif</legend>

      <p>
        <label for="">Nom du médecin:</label>
        <input type="text" name="nomMedecinReserver">

      </p>
      <p>
        <label for="">Prénom du médecin</label>
        <input type="text" name="prenomMedecin">

      </p>

      <p>
        <label for="">Date du RDV Administratif : </label>
        <input type="datetime-local" name="dateRDVAdmin">
      </p>

      <p>
        <label for="">Motif du RDV : </label>
        <input type="text" name="LibelleRDVAdmin">
      </p>

      <p>
        <input type="submit" name="reserverLaDate" value="Réserver La Date">
        <input type="reset" value="Effacer" name="effacer">
      </p>


    </fieldset>
  </form>

  <?php
  if (!empty($afficherCreerRdvAdminAvecSucces)) {
    echo $afficherCreerRdvAdminAvecSucces;
  }

  ?>

  <form action="site.php" method="POST" name="form3">
    <fieldset>
      <legend>Bloquer plusieurs crénaux pour RDV administratif</legend>
      <i>Veuillez indiquer dans le champ ci-dessous le nombre de crénaux à bloquer</i>
      <p>
        <label for="">Nom du médecin:</label>
        <input type="text" name="nomMedecinBloquerPlus">
      <p>
        <label for="">Prénom du médedin:</label>
        <input type="text" name="prenomMedecinBloquerPlus">
      </p>

      </p>
      <p>
        <label for="">Nombre de créneau :</label>
        <input type="text" id="nbCreneaux" onkeyup="CreerChampBloquer()">
      </p>

      <p id="nouveauChampBloquerCreneau">
      </p>
      <p id="champValideBloqueCreneau">

      </p>
    </fieldset>

  </form>


  <?php
  if (!empty($afficherBloquerSuccess)) {
    echo $afficherBloquerSuccess;
  }

  ?>

</body>

<?php
if (!empty($contenue)) {
  echo $contenue;
}

?>


</html>