<?php

function afficherPageMedecin()
{
  require_once('vue/gabarit/gabaritMedecin.php');
}
function deconnexionMedecin()
{
  require_once('vue/gabarit/gabarit.php');
}

function afficherAjouterAvecSuccessRDVAdmin()
{
  $afficherCreerRdvAdminAvecSucces = '<script text="text/javascript"> 
  alert("Un nouveau RDV a été ajouté avec succès !")
  </script>';
  require_once('vue/gabarit/gabaritMedecin.php');
}

function afficherBloquerSuccess()
{
  $afficherBloquerSuccess =
    '<script text="text/javascript"> 
  alert("Votre créneau(x) bloque avec success!")
  </script>';
  require_once('vue/gabarit/gabaritMedecin.php');
}
