<?php
require_once('vue/vue_/vueAgent.php');
require_once('modele/modeleAgent.php');


function CtlAccueilAgent()
{
  afficherAcceuilleAgent();
}


function CtlCreerUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde)
{
  if (!empty($nom) && !empty($prenom) && !empty($nss) && !empty($datedenaissance) && !empty($adresse) && !empty($numtel) && !empty($departementdenaissance) && !empty($solde)) {
    ajouterUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde);
    afficherAjouterAvecSuccess();
  } else {
    throw new Exception("un champ est invalide");
  }
}
function CtlErreurPasNumber()
{
  afficherErreurPasNumber();
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


function CtlAfficherFormuleModifierInforPatient($idPatient, $nomPatient, $prenomPatient, $nssPatient, $datenaissancePatient, $adressePatient, $numtelPatient, $departementPatient, $soldePatient)
{
  if (!empty($idPatient) || !empty($nomPatient) || !empty($prenomPatient) || !empty($nssPatient) || !empty($datenaissancePatient) || !empty($adressePatient) || !empty($numtelPatient) || !empty($departementPatient) || !empty($soldePatient)) {
    UpdateInforPatient($idPatient, $nomPatient, $prenomPatient, $nssPatient, $datenaissancePatient, $adressePatient, $numtelPatient, $departementPatient, $soldePatient);
    affchierModifierAvecSucess();
  } else {
    throw new Exception("Invalide syntex. Erreur ici");
  }
}

function CtlDeconnexionAgent()
{
  deconnexionAgent();
}



function CtlAfficherLaSynthesePatient($nss2)
{
  $IdPatient = RecupererIdPatient($nss2);
  $numPatient = $IdPatient->id_Patient;
  afficherSynthesePatient(RecupererInformationPatient($numPatient));
}


function CtlChercherNSSPatientAvecNOmPrenom($chercherNomPatient, $chercherPrenomPatient)
{

  $NSSPatient = chercherUnPatient($chercherNomPatient, $chercherPrenomPatient);
  if (!empty($NSSPatient)) {
    afficherNSSPatient($NSSPatient);
  } else {
    throw new Exception("Nom et Prénom ne coresspondent pas à la table de donnée. Saisissez un autre.");
  }
}

function CtlChercherNSSPatientAvecDate($chercherNSSDate)
{
  $NSSPatient = ChercherNSSAvecDate($chercherNSSDate);
  if (!empty($NSSPatient)) {
    afficherNSSPatient($NSSPatient);
  } else {
    throw new Exception("Trouve pas la date correspond dans la table de donnée. Saisissez une autre date.");
  }
}

function CtlAjouterMontantPatient($nssDepot, $montantDepot)
{
  $soldePatient = RecupererSoldePatient($nssDepot);
  $soldeAncien = $soldePatient->solde;
  $nouveauSolde = $soldeAncien + $montantDepot;
  UpdateSoldePatient($nssDepot, $nouveauSolde);
  afficherAjouterSoldeAvecSuccess();
}

function CtlPayerMotifRDVPatient($IDPatientPayement)
{
  $a = RecupererIDMotifRDVInTableRDV($IDPatientPayement);
  $IDMotif = $a->Id_Motif;
  AfficherPrixMotifRDV(RecupererPrixMotifRDV($IDMotif), $IDPatientPayement);
}

function CtlEffectuerPayementMotifRDV($idPatientPayer, $prixMotifPayer)
{
  $soldePatient = RecupererSoldePatientPourPayer($idPatientPayer);
  $soldePayer = $soldePatient->solde;
  if ($soldePayer >= $prixMotifPayer) {
    $nouveauSolde = $soldePayer - $prixMotifPayer;
    UpdateNouveauSoldePatient($idPatientPayer, $nouveauSolde);
    UpdateEtatPayementPatient($idPatientPayer);
    afficherPayerAvecSuccess();
  } else {
    afficherPayementPasSuccess();
  }
}

function CtlVerifierRDV($nomPatientPrendRDV, $prenomPatientPrendRDV, $nomMedicinPrendRDV, $prenomMedecinPrendRDV, $specialiteMedecinPrendRDV, $datePrendRDV)
{
  $a = RecupererIdMedecinRDV($nomMedicinPrendRDV, $prenomMedecinPrendRDV);
  $idMedecin = $a->id;
  $b = RecupererInforRDV($idMedecin);
  $specialiteMedecin = $b->libelleSP;
  $dateP = date('Y-m-d H:i:s', strtotime($datePrendRDV));
  $verifierDate = VerifierDateInTableTacheAdmin($dateP);
  if ($specialiteMedecin == $specialiteMedecinPrendRDV) {
    if (empty($verifierDate)) {
      afficherPreciserMotif(RecupeterMotifInTableMotif(), $nomPatientPrendRDV, $prenomPatientPrendRDV, $nomMedicinPrendRDV, $prenomMedecinPrendRDV, $datePrendRDV);
    } else {
      $causeRefuserRDV = $verifierDate->LibelleTa;
      afficherErreurDateIndisponible($causeRefuserRDV);
    }
  } else {
    afficherErreurSPPasCoresspondre();
  }
}

function CtlValiderRDV($nomPatientPrendRDV, $prenomPatientPrendRDV, $nomMedicinPrendRDV, $prenomMedecinPrendRDV, $ChoisirMotifRDV, $datePrendRDV)
{
  $a = RecupererIdMedecinRDV($nomMedicinPrendRDV, $prenomMedecinPrendRDV);
  $idMedecin = $a->id;
  $c = RecupererIdPatientInTableInformationPatient($nomPatientPrendRDV, $prenomPatientPrendRDV);
  $IdPatient = $c->id_Patient;
  $d = RecupererIdMotifRDVInTableMotif($ChoisirMotifRDV);
  $idMotif = $d->Id_Motif;
  CreerNouveauRDV($datePrendRDV, $idMedecin, $idMotif, $IdPatient);
  afficherPiecesEtConsignes(SortirPiecesEtConsignes($idMotif));
  afficherEnregisterRDVAvecSuccess();
}

function CtlVoirLesRDVPasPayer($nssRDVEnAttendantPay)
{
  $a = RecupererIDPatientRDV($nssRDVEnAttendantPay);
  $idPatientRDV = $a->id_Patient;
  afficherLesRDVPasPayer(RecupereLesRDVPasPayer($idPatientRDV));
}
