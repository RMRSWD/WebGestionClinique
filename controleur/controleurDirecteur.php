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

function CtlModifierInforD($idPersonnelD)
{
  if (!empty($idPersonnelD)) {
    $inforPersonnel = recupererInfoModif($idPersonnelD);
    $verifiPersonnel = $inforPersonnel->genre;
    if ($verifiPersonnel == "A") {
      afficherPourModifierInforAgent(recupererInfoModifAgent($idPersonnelD));
    } else if ($verifiPersonnel == "M") {
      afficherPourModifierInforMedecin(recupererInfoModifMedecin($idPersonnelD));
    }
  } else {
    throw new Exception("ID est invalide");
  }
}

function CtlModifierInforAD($idAgent, $loginAgent, $mdpAgent, $nomAgent, $prenomAgent)
{
  if (!empty($idAgent) || !empty($loginAgent) || !empty($mdpAgent) || !empty($nomAgent) || !empty($prenomAgent)) {
    UpdateInforAgent($idAgent, $loginAgent, $mdpAgent, $nomAgent, $prenomAgent);
    affficherModifierSucess();
  } else {
    throw new Exception("Login est invalide");
  }
}
function CtlModifierInforMD($idMedecin, $loginMedecin, $mdpMedecin, $nomMedecin, $prenomMedecin)
{
  if (!empty($idMedecin) || !empty($loginMedecin) || !empty($mdpMedecin) || !empty($nomMedecin) || !empty($prenomMedecin)) {
    UpdateInforMedecin($idMedecin, $loginMedecin, $mdpMedecin, $nomMedecin, $prenomMedecin);
    affficherModifierSucess();
  } else {
    throw new Exception("Login est invalide");
  }
}

function CtlAfficherTousPieces()
{
  afficherTousLesPieces(RecupererTousLesPieces());
}

function CtlCreerMotifD($nomMotif, $prixMotif, $choisirLesPieces)
{
  if (!empty($nomMotif) && !empty($prixMotif) && !empty($choisirLesPieces)) {
    $numID = RecupererIdPiece($choisirLesPieces);
    $num = $numID->Id_Piece;
    CreerNouveauMotif($nomMotif, $prixMotif, $num);
    afficherCreerMotifSucess();
  } else {
    throw new Exception("Syntex invalide");
  }
}
