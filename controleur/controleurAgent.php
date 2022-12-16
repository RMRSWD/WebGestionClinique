<?php
require_once('vue/vue_/vueAgent.php');
require_once('modele/modeleAgent.php');

function CtlAccueilAgent()
{
  $nom = $_SESSION['agentAcceuil']->nomP;
  $prenom = $_SESSION['agentAcceuil']->prenomP;
  afficherAcceuilleAgent($nom, $prenom);
}
// function  CtlNomPrenom($login, $mdp)
// {
//   $nomPrenomAgent = recupererNomPrenomAgent($login, $mdp);
//   afficherNomPrenom($nomPrenomAgent);
// }

function CtlCreerUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde)
{
  if (!empty($nom) && !empty($prenom) && !empty($nss) && !empty($datedenaissance) && !empty($adresse) && !empty($numtel) && !empty($departementdenaissance) && !empty($solde)) {
    ajouterUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde);
    afficherAjouterAvecSuccess();
    CtlAccueilAgent();
  } else {
    throw new Exception("un champ est invalide");
  }
}

function CtlChercherUnPatient($nom, $prenom)
{
  if (!empty($nom) && !empty($prenom)) {
    chercherUnPatient($nom, $prenom);
    afficherPatient(chercherUnPatient($nom, $prenom));
  } else {
    throw new Exception("nom ou prénom est invalide");
  }
}

// function CTlModifierInformationClient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance)
// {
//   if (!empty($nom) || !empty($prenom) || !empty($nss) || !empty($datedenaissance) || !empty($adresse) || !empty($numtel) || !empty($departementdenaissance)) {
//     UpdateInformationClient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance);
//     affchierModifierAvecSucess();
//   } else {
//     throw new Exception("Khong chay duoc dau");
//   }
// }

function CtlModifierNomClient($nom)
{
  if (!empty($nom)) {
    UpdateNomClient($nom);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}

function CtlModifierPrenomClient($prenom)
{
  if (!empty($prenom)) {
    UpdatePrenomClient($prenom);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}

function CtlModifierNssClient($nss)
{
  if (!empty($nss)) {
    UpdateNssClient($nss);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}
function CtlModifierDateNaissanceClient($datedenaissance)
{
  if (!empty($datedenaissance)) {
    UpdateDateNaissanceClient($datedenaissance);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}

function CtlModifierAdresseClient($adresse)
{
  if (!empty($adresse)) {
    UpdateAdresseClient($adresse);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}
function CtlModifierNumtelClient($numtel)
{
  if (!empty($numtel)) {
    UpdateNumtelClient($numtel);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}
function CtlModifierDepartementClient($departementdenaissance)
{
  if (!empty($departementdenaissance)) {
    UpdateDepartementClient($departementdenaissance);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex");
  }
}
function CtlDeconnexionAgent()
{
  deconnexionAgent();
}

function CtlErreurNumber()
{
  afficherErreurNumber();
}
