<?php
require_once('modele/modeleMedecin.php');
require_once('vue/vue_/vueMedecin.php');

function CtlAcceuilMedecin()
{
  $nom = $_SESSION['Medecin']->nomP;
  $prenom = $_SESSION['Medecin']->prenomP;
  afficherPageMedecin($nom, $prenom);
}

function CtlCreerRDVAdministratif($nomMedecin, $prenomMedecin, $dateRDVAdmin, $motifRDVAdmin)
{
  if (!empty($dateRDVAdmin) && !empty($motifRDVAdmin) && !empty($nomMedecin) && !empty($prenomMedecin)) {
    $a = RecupererIdMedecin($nomMedecin, $prenomMedecin);
    $idMedecin = $a->id;
    CreerUnRDVAdmin($dateRDVAdmin, $motifRDVAdmin);
    $b = RecupererIdRDVAdministratif($motifRDVAdmin);
    $idTaAdmin = $b->Id_TacheAdmin;
    CreerRDVInTravailAdmin($idMedecin, $idTaAdmin);

    afficherAjouterAvecSuccessRDVAdmin();
  } else {
    throw new Exception("un champ est invalide");
  }
}

function CtlBloquerCreneauMedecin($valeur)
{
  if (!empty($valeur)) {
    $a = RecupererIdTaAdmin($valeur);
    $IdTaAdmin = $a->Id_TacheAdmin;
    SupprimerInTableTravailAdmin($IdTaAdmin);
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
