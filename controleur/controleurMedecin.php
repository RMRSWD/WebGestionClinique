<?php
require_once('modele/modeleMedecin.php');
require_once('vue/vue_/vueMedecin.php');

function CtlAcceuilMedecin()
{
  $nom = $_SESSION['Medecin']->nomP;
  $prenom = $_SESSION['Medecin']->prenomP;
  afficherPageMedecin($nom, $prenom);
}

function CtlCreerRDVAdministratif($dateRDVAdmin, $motifRDVAdmin)
{
  if (!empty($dateRDVAdmin) && !empty($motifRDVAdmin)) {
    CreerUnRDVAdmin($dateRDVAdmin, $motifRDVAdmin);
    afficherAjouterAvecSuccessRDVAdmin();
  } else {
    throw new Exception("un champ est invalide");
  }
}

function CtlBloquerCreneauMedecin($valeur)
{
  if (!empty($valeur)) {
    BloquerCreneau($valeur);
    afficherBloquerSuccess();
  } else {
    throw new Exception("date est invalide");
  }
}
function CtlDeconnexionMedecin()
{
  deconnexionMedecin();
}
