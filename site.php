<?php
require_once('controleur/controleurlogin.php');
require_once('controleur/controleurMedecin.php');
require_once('controleur/controleurAgent.php');
require_once('controleur/controleurDirecteur.php');

try {
  if (isset($_POST["connect"])) {

    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    CtrVerifierLogin($login, $mdp);
    // CtlNomPrenom($login, $mdp);
  } elseif (isset($_POST["deconecte"])) {
    CtlDeconnexionAgent();
  } elseif (isset($_POST["deconecteDirecteur"])) {
    CtlDeconnexionDirecteur();
  } elseif (isset($_POST["deconnexionMedecin"])) {
    CtlDeconnexionMedecin();
  } elseif (isset($_POST["creerunpatient"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $nss = $_POST["nss"];
    $datedenaissance = $_POST["datenaissance"];
    $adresse = $_POST["adresse"];
    $numtel = $_POST["numtel"];
    if (!empty($_POST["PaysEtranger"])) { //si PaysEtranger non vide -> effectuer ($departementdenaissance = $_POST["PaysEtranger"];) si non  $departementdenaissance = $_POST["departementdenaissance"];
      $departementdenaissance = $_POST["PaysEtranger"];
    } else {
      $departementdenaissance = $_POST["departementdenaissance"];
    }
    $solde = $_POST["deposer"];
    CtlCreerUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde);
  } else if (isset($_POST["chercher"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    CtlChercherUnPatient($nom, $prenom);
  } else if (isset($_POST["modifierInforPatient"])) {
    $idPatient = $_POST["idPatient"];
    $nomPatient = $_POST["nomPatient"];
    $prenomPatient = $_POST["prenomPatient"];
    $nssPatient = $_POST["nssPatient"];
    $datenaissancePatient = $_POST["datenaissancePatient"];
    $adressePatient = $_POST["adressePatient"];
    if (is_numeric($_POST["numtelPatient"])) {
      $numtelPatient = $_POST["numtelPatient"];
    } else {
      CtlErreurPasNumber();
    }
    $departementPatient = $_POST["departementPatient"];
    $soldePatient = $_POST["soldePatient"];
    CtlAfficherFormuleModifierInforPatient($idPatient, $nomPatient, $prenomPatient, $nssPatient, $datenaissancePatient, $adressePatient, $numtelPatient, $departementPatient, $soldePatient);
  } else if (isset($_POST["affichersynthese"])) {
    $nss2 = $_POST["nss2"];
    CtlAfficherLaSynthesePatient($nss2);
  } else if (isset($_POST["validerChercherNSSPatient"])) {
    if (!empty($_POST["chercherNomPatient"]) || !empty($_POST["chercherPrenomPatient)"])) {
      $chercherNomPatient = $_POST["chercherNomPatient"];
      $chercherPrenomPatient = $_POST["chercherPrenomPatient"];
      CtlChercherNSSPatientAvecNOmPrenom($chercherNomPatient, $chercherPrenomPatient);
    } else {
      $chercherNSSDate = $_POST["chercherDateNaissancePatient"];
      CtlChercherNSSPatientAvecDate($chercherNSSDate);
    }
  } else if (isset($_POST["valideNssDepot"])) {
    $nssDepot = $_POST["nssDepot"];
    $montantDepot = $_POST["montantDepot"];
    CtlAjouterMontantPatient($nssDepot, $montantDepot);
  } else if (isset($_POST["validePayementMotifRDV"])) {
    $libelleMotifPayement = $_POST["libelleMotifPayement"];
    CtlPayerMotifRDVPatient($libelleMotifPayement);
  } else if (isset($_POST["effectuerLePayement"])) {
    $idPatientPayer = $_POST["idPatientPayer"];
    $prixMotifPayer = $_POST["prixMotifPayer"];
    CtlEffectuerPayementMotifRDV($idPatientPayer, $prixMotifPayer);
  } else if (isset($_POST["verifierRDV"])) {
    $nomPatientPrendRDV  = $_POST["nomPatientPrendRDV"];
    $prenomPatientPrendRDV = $_POST["prenomPatientPrendRDV"];
    $nomMedicinPrendRDV = $_POST["nomMedicinPrendRDV"];
    $prenomMedecinPrendRDV = $_POST["prenomMedicinePrendRDV"];
    $specialiteMedecinPrendRDV = $_POST["specialiteMedecinPrendRDV"];
    $datePrendRDV = $_POST["datePrendRDV"];

    CtlVerifierRDV($nomPatientPrendRDV, $prenomPatientPrendRDV, $nomMedicinPrendRDV, $prenomMedecinPrendRDV, $specialiteMedecinPrendRDV, $datePrendRDV);
  } else if (isset($_POST["validerRDV"])) {
    $nomPatientEnregistrerRDV = $_POST["nomPatientEnregistrerRDV"];
    $prenomPatientPrendRDV = $_POST["prenomPatientEnregistrerRDV"];
    $nomMedecinEnregistrerRDV = $_POST["nomMedecinEnregistrerRDV"];
    $prenomMedecinEnregistrerRDV = $_POST["prenomMedecinEnregistrerRDV"];
    $dateEnregisterRDV = $_POST["dateEnregisterRDV"];
    $ChoisirMotifRDV = $_POST["ChoisirMotifRDV"];
    CtlValiderRDV($nomPatientEnregistrerRDV, $prenomPatientPrendRDV, $nomMedecinEnregistrerRDV, $prenomMedecinEnregistrerRDV, $ChoisirMotifRDV, $dateEnregisterRDV);
  } else if (isset($_POST["validerNSSRDVEnAttendantPay"])) {
    $nssRDVEnAttendantPay = $_POST["nssRDVEnAttendantPay"];
    CtlVoirLesRDVPasPayer($nssRDVEnAttendantPay);
  }


  //PAGE DE MEDECIN

  else if (isset($_POST["reserverLaDate"])) {
    $NomMedecinReserver = $_POST["nomMedecinReserver"];
    $PrenomMedecin = $_POST["prenomMedecin"];
    $dateRDVAdmin = $_POST["dateRDVAdmin"];
    $libelleRDVAdmin = $_POST["LibelleRDVAdmin"];
    CtlCreerRDVAdministratif($NomMedecinReserver, $PrenomMedecin, $dateRDVAdmin, $libelleRDVAdmin);
  } else if (isset($_POST["validerBloquerCreneau"])) {
    $ChampBloqueCreneau = $_POST["ChampBloqueLesCreneaux"];
    foreach ($ChampBloqueCreneau as $valeur) {
      CtlBloquerCreneauMedecin($valeur);
    }
  }


  //PAGE DE DIRECTEUR

  else if (isset($_POST["validernewlogin"])) {
    $genre = $_POST["genre"];
    $creelogin = $_POST["creelogin"];
    $creemdp = $_POST["creepassword"];
    CtrCreerNewLogin($genre, $creelogin, $creemdp);
  } else if (isset($_POST["afficherPersonnelAD"])) {
    CtlAfficherInformationAgent();
  } else if (isset($_POST["afficherPersonnelMD"])) {
    CtlAfficherInformationMedecin();
  } else if (isset($_POST["modifInforPersonnelD"])) {
    $idPersonnelD = $_POST["idPersonnelD"];
    CtlModifierInforD($idPersonnelD);
  }
  //modifier infor agent et medecin

  else if (isset($_POST["modifierAgentD"])) {
    $idAgent = $_POST["idAgent"];
    $loginAgent = $_POST["loginAgent"];
    $mdpAgent = $_POST["mdpAgent"];
    $nomAgent = $_POST["nomAgent"];
    $prenomAgent = $_POST["prenomAgent"];
    CtlModifierInforAD($idAgent, $loginAgent, $mdpAgent, $nomAgent, $prenomAgent);
  } else if (isset($_POST["modifierMedecinD"])) {
    $idMedecin = $_POST["idMedecin"];
    $loginMedecin = $_POST["loginMedecin"];
    $mdpMedecin = $_POST["mdpMedecin"];
    $nomMedecin = $_POST["nomMedecin"];
    $prenomMedecin = $_POST["prenomMedecin"];
    CtlModifierInforMD($idMedecin, $loginMedecin, $mdpMedecin, $nomMedecin, $prenomMedecin);
  } else if (isset($_POST["modifierDirecteur"])) {

    $idDirecteur = $_POST["idDirecteur"];
    $loginDirecteur = $_POST["loginDirecteur"];
    $mdpDirecteur = $_POST["mdpDirecteur"];
    $nomDirecteur = $_POST["nomDirecteur"];
    $prenomDirecteur = $_POST["prenomDirecteur"];
    CtlModifierInforDirecteur($idDirecteur, $loginDirecteur, $mdpDirecteur, $nomDirecteur, $prenomDirecteur);
  }



  // Créer un motif 

  else if (isset($_POST["validerMotif"])) {
    $nomMotif = $_POST["nomMotif"];
    $prixMotif = $_POST["prixMotif"];
    $nomPieceFournit = "";
    $nomConsigneFournit = "";
    CtlCreerNouveauMotif($nomMotif, $prixMotif);
    foreach ($_POST["nomPieceFournit"] as $element) {
      if (empty($element)) {
        echo "pas d'élément";
      } else {
        $nomPieceFournit = $element;
        CtlCreerMotifD($nomMotif, $nomPieceFournit);
      }
    }
    foreach ($_POST["nomConsigneFournit"] as $element1) {
      if (empty($element1)) {
        echo "erreur pas d'élément dans consigne";
      } else {
        $nomConsigneFournit = $element1;
        CtlCreerConsigneD($nomMotif, $nomConsigneFournit);
      }
    }
  } else if (isset($_POST["validerIDMotif"])) {
    $idMotif = $_POST["idMotif"];
    CtlAfficherModifierIdMotif($idMotif);
  } else if (isset($_POST["modifierMotifD"])) {
    $idMotif = $_POST["idMotif"];
    $libelleMotif = $_POST["libelleMotif"];
    $prixMotif = $_POST["prixMotif"];
    $nomPieceModifD = "";




    $ids = $_POST["idPieceModifD"];
    $noms = $_POST["nomPieceModifD"];



    foreach ($ids as $key => $value) {

      CtlUpdatePiece($value, $noms[$key]);
    }
  } else if (isset($_POST["supprimerMotif"])) {
    $libelleMotifSD = $_POST["libelleMotifSD"];
    CtlSupprimerMotif($libelleMotifSD);
  } else if (isset($_POST["ValiderCreerUnMedecin"])) {
    $numMedecin = $_POST["numMedecin"];
    $nomMedecin = $_POST["nomMedecin"];
    $prenomMedecin = $_POST["prenomMedecin"];
    $specialiteMedecin = $_POST["specialiteMedecin"];
    CtlCreerNomPrenomSpecialiteMedecin($numMedecin, $nomMedecin, $prenomMedecin, $specialiteMedecin);
  } else if (isset($_POST['supprimerMedecin'])) {
    $id_MedecinSupprimer = $_POST['id_MedecinSupprimer'];
    CtlSupprimerMedecin($id_MedecinSupprimer);
  } else {
    ctlAcceuille();
  }
} catch (Exception $e) {
  CtlErreur($e);
}
