<?php
require_once('vue/vue_/vueDirecteur.php');
require_once('modele/modeleDirecteur.php');


function CtlAccueilDirect()
{
  $nom = $_SESSION['Directeur']->nomP;
  $prenom = $_SESSION['Directeur']->prenomP;
  afficherAcceuilleDirecteur($nom, $prenom);
}
function CtlDeconnexionDirecteur()
{
  deconnexion();
}

function CtrCreerNewLogin($login, $mdp)
{
  if (!empty($login) && !empty($mdp)) {
    creerNewLogin($login, $mdp);
    afficherCreerSucess();
  } else {
    throw new Exception("Login ou mot de passe est invalide");
  }
}

function CtlAfficherInformationAgent()
{
  afficherInforAgent(recupererInfoAgent());
}
function CtlAfficherInformationMedecin()
{
  afficherInforMedecin(recupererInfoMedecin());
}

function CtlModifierInforAgentD($idPersonnelAD)
{
  if (!empty($idPersonnelAD)) {
    afficherPourModifierInforAgent(recupererInfoModifAgent($idPersonnelAD));
  } else {
    throw new Exception("Login est invalide");
  }
}
