<?php
require_once('modele/modeleMedecin.php');
require_once('vue/vue_/vueMedecin.php');

function CtlAcceuilMedecin()
{
  afficherPageMedecin();
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

function CtlBloquerCreneauMedecin($valeur, $nomBloPlus, $prenomBloPlus)
{
  if (!empty($valeur && !empty($nomBloPlus)) && !empty($prenomBloPlus)) {
    $a = RecupererIdMedecin($nomBloPlus, $prenomBloPlus);
    $idMedecin = $a->id;
    CreerUnRDVAdminPlus($valeur);
    $b = RecupererIdRDVAdministratifPlus($valeur);
    $idTaAdmin = $b->Id_TacheAdmin;
    CreerUnRDVAdminPlusInTableTravailAdmin($idMedecin, $idTaAdmin);
    afficherBloquerSuccess();
  } else {
    throw new Exception("date est invalide");
  }
}
function CtlDeconnexionMedecin()
{
  deconnexionMedecin();
}
