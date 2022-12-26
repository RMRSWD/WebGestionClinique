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

function CtrCreerNewLogin($genre, $login, $mdp)
{
  if (!empty($genre) && !empty($login) && !empty($mdp)) {
    if ($genre == "M") {
      creerNewLoginMedecin($login, $mdp);
      afficherCreerSucess();
    } else if ($genre == "A") {
      creerNewLoginAgent($login, $mdp);
      afficherCreerSucess();
    } else {
      creerNewLoginDirecteur($login, $mdp);
      afficherCreerSucess();
    }
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
    } else {
      afficherPourModifierInforDirecteur(recupererInfoModifDirecteur($idPersonnelD));
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

function CtlModifierInforDirecteur($idDirecteur, $loginDirecteur, $mdpDirecteur, $nomDirecteur, $prenomDirecteur)
{
  if (!empty($idDirecteur) || !empty($loginDirecteur) || !empty($mdpDirecteur) || !empty($nomDirecteur) || !empty($prenomDirecteur)) {
    UpdateInforDirecteur($idDirecteur, $loginDirecteur, $mdpDirecteur, $nomDirecteur, $prenomDirecteur);
    affficherModifierSucess();
  } else {
    throw new Exception("Login est invalide");
  }
}
// function CtlAfficherTousPieces()
// {
//   afficherTousLesPieces(RecupererTousLesPieces());
// }

function CtlCreerNouveauMotif($nomMotif, $prixMotif)
{
  if (!empty($nomMotif) && !empty($prixMotif)) {
    CreerNouveauMotif($nomMotif, $prixMotif);
  } else {
    throw new Exception("Syntex invalide");
  }
}
function CtlCreerMotifD($nomMotif, $choisirLesPieces)
{
  if (!empty($choisirLesPieces)) {
    CreerNouveauPiece($choisirLesPieces);
    $numIDMotif = RecupererIdMotif($nomMotif);
    $numMo = $numIDMotif->Id_Motif;
    $numIDPiece = RecupererIdPiece($choisirLesPieces);
    $numPi = $numIDPiece->Id_Piece;

    CreerNouveauIdMotifEtIdPieceInTablePM($numMo, $numPi);

    afficherCreerMotifSucess();
  } else {
    throw new Exception("Syntex invalide");
  }



  // if (!empty($nomMotif) && !empty($prixMotif) && !empty($choisirLesPieces)) {
  //   $numID = RecupererIdPiece($choisirLesPieces);
  //   $num = $numID->Id_Piece;
  //   CreerNouveauMotif($nomMotif, $prixMotif, $num);
  //   afficherCreerMotifSucess();
  // } else {
  //   throw new Exception("Syntex invalide");
  // }
}








function CtlAfficherModifierIdMotif($idMotif)
{
  if (!empty($idMotif))
    afficherModifierMotif(RecupererInforInTablePMETMotifEtPiece($idMotif));
  // if (!empty(RecupererIdPieceInTablePM($idMotif))) {
  //   foreach (RecupererIdPieceInTablePM($idMotif) as $ligneIdP) {
  //     RecupererNomPieceInTablePiece($ligneIdP->Id_Piece);
  // afficherModifierPieceInFormMotif(RecupererNomPieceInTablePiece(RecupererIdPieceInTablePM($idMotif)));
  // } else {
  //   echo "erreur";
  // }
  else {
    throw new Exception("Id invalide");
  }
}
















function CtlUpdateMotif($idMotif, $libelleMotif, $prixMotif)
{
  if (!empty($idMotif) && !empty($libelleMotif) && !empty($prixMotif)) {

    UpdateMotif($idMotif, $libelleMotif, $prixMotif);
    afficherModifMotifSucess();
  } else {
    throw new Exception("Syntex invalide pour modifier un motif");
  }
}

function CtlUpdatePiece($idPieceModifD, $nomPieceModifD)
{
  if (!empty($nomPieceModifD) && !empty($idPieceModifD)) {
    UpdatePiece($idPieceModifD, $nomPieceModifD);
    afficherModifMotifSucess();
  } else {
    throw new Exception("Syntex invalide pour modifier un motif");
  }
}


function CtlSupprimerMotif($libelleMotifSD)
{
  if (!empty($libelleMotifSD)) {
    $a = RecupererIdMotif($libelleMotifSD);
    $IDMotifSupprimer = $a->Id_Motif;
    $b = RecupererIdPieceInTablePM($IDMotifSupprimer);
    $IdPieceSupprimer = $b->Id_Piece;
    SupprimerInTablePM($IDMotifSupprimer);
    SupprimerPiece($IdPieceSupprimer);
    SupprimerMotif($libelleMotifSD);
    afficherSupprimerMotifSucess();
  }
}

function CtlCreerNomPrenomSpecialiteMedecin($numMedecin, $nomMedecin, $prenomMedecin, $specialiteMedecin)
{

  CreerNomPrenomMedecin($numMedecin, $nomMedecin, $prenomMedecin);
  Creerid_InTableMedecin($numMedecin);
  CreerSpecialiteInTableSpecialite($specialiteMedecin);
  $inforSpecialite = RecupererInforSpecialite($specialiteMedecin);
  $idSpecialite = $inforSpecialite->idSP;
  CreerIdPersonnelEtIdSpecialiteInTableSpecialise($numMedecin, $idSpecialite);
  afficherCreerNomPrenomSpecialiteMedecinSucces();
}

function CtlSupprimerMedecin($id_MedecinSupprimer)
{
  $inforSpecialise = RecupererInforInTableSpecialise($id_MedecinSupprimer);
  $idSpecialite = $inforSpecialise->idSP;
  SupprimerIdMedecinInTabnleSpecialise($id_MedecinSupprimer);
  SupprimerIdInTableSpecialite($idSpecialite);
  SupprimerIdInTableMedecin($id_MedecinSupprimer);
  SupprimerIdMedecinInTableGestionConnect($id_MedecinSupprimer);
  afficherSupprimerMedecinSucces();
}
