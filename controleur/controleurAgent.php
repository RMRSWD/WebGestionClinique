<?php
require_once('vue/vue_/vueAgent.php');
require_once('modele/modeleAgent.php');

function CtlAccueilAgent()
{
  afficherAcceuilleAgent();
}

function CtlCreerUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance)
{
  if (!empty($nom) && !empty($prenom) && !empty($nss) && !empty($datedenaissance) && !empty($adresse) && !empty($numtel) && !empty($departementdenaissance)) {
    ajouterUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance);
    afficherAjouterAvecSuccess();
    CtlAccueilAgent();
  } else {
    throw new Exception("un champ est invalide");
  }
}
