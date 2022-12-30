<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Page Medecin</title>
  <script src="vue/fichier.js" text="text/javascript"></script>
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

  <form action="site.php" method="POST" name="form2">
    <fieldset>
      <legend>Préparer un RDV Administratif</legend>

      <p>
        <label for="">Nom du médecin:</label>
        <input type="text" name="nomMedecinReserver">

      </p>
      <p>
        <label for="">Prénom de médecin</label>
        <input type="text" name="prenomMedecin">

      </p>

      <p>
        <label for="">Date RDV Admin : </label>
        <input type="datetime-local" name="dateRDVAdmin">
      </p>

      <p>
        <label for="">Nom/Motif du RDV : </label>
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
      <legend>Bloquer les crénaux administratif</legend>
      <i>Vous indiquez ici dans le champ au-dessous pour bloquer les créneaux que vous voulez</i>
      <p>
        <input type="text" id="nbCreneaux" onkeyup="CreerChampBloquer()">
        <!-- <input type="text" name="nbCreneaux" value="" />
        <input type="submit" value="Execute" onclick="CreerChampBloquer()"> -->
      </p>

      <p id="nouveauChampBloquerCreneau">
      </p>
      <p id="champValideBloqueCreneau">

      </p>

      <!-- <script>
        function CreerChampBloquer() {
          champBloquer = "";
          var nbChamp = document.forms["form3"].elements["nbCreneaux"].value;
          // var nbChamp = document.getElementById("nbCreaneaux").value;

          if (nbChamp < 10) {
            for (i = 0; i < nbChamp; i++) {
              champBloquer = champBloquer + '<p>Créneau' + Number(i + 1) + ' <input type="datetime-local" name="ChampBloqueLesCreneaux"></p>';
            }
            document.getElementById("nouveauChampBloquerCreneau").innerHTML = champBloquer;
          }
        }
      </script> -->
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