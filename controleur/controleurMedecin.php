<?php
require_once('modele/modeleMedecin.php');
require_once('vue/vue_/vueMedecin.php');

function CtlAcceuilMedecin()
{
  $nom = $_SESSION['Medecin']->nomP;
  $prenom = $_SESSION['Medecin']->prenomP;
  afficherPageMedecin($nom, $prenom);
}

function CtlDeconnexionMedecin()
{
  deconnexionMedecin();
}
