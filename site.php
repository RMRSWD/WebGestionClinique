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
    $numtelPatient = $_POST["numtelPatient"];
    $departementPatient = $_POST["departementPatient"];
    $soldePatient = $_POST["soldePatient"];
    CtlAfficherFormuleModifierInforPatient($idPatient, $nomPatient, $prenomPatient, $nssPatient, $datenaissancePatient, $adressePatient, $numtelPatient, $departementPatient, $soldePatient);
  }


  //page de directeur

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
    //$nomPieceFournit = $_POST["nomPieceFournit"];
    CtlCreerNouveauMotif($nomMotif, $prixMotif);
    foreach ($_POST["nomPieceFournit"] as $element) {
      if (empty($element)) {
        echo "pas d'élément";
      } else {
        $nomPieceFournit = $element;
        CtlCreerMotifD($nomMotif, $nomPieceFournit);
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
    //CtlUpdateMotif($idMotif, $libelleMotif, $prixMotif);


    // $arrlength = count($_POST["idPieceModifD"]);
    // echo $arrlength;
    $ids = $_POST["idPieceModifD"];
    $noms = $_POST["nomPieceModifD"];

    // for ($x = 0; $x < $arrlength; $x++) {
    //   $idPieceModifD = $ids[$x];
    //   $nomPieceModifD = $noms[$x];
    //   echo $idPieceModifD;
    //   CtlUpdatePiece($idPieceModifD, $nomPieceModifD);
    // }


    foreach ($ids as $key => $value) {
      // echo "The index is = " . $key . ", and value is = " . $value . "and nom =" . $noms[$key];
      // echo "\n";
      CtlUpdatePiece($value, $noms[$key]);
    }

    // foreach ($_POST["idPieceModifD"] as $idPiece) {
    // echo $idPiece;
    //$nomPieceModifD = $nomPiece;
    // $idPieceModifD = $idPiece;
    // $nomPieceModifD = $_POST["nomPieceModifD"];
    // CtlUpdatePiece($idPieceModifD, $nomPieceModifD);
    // }

    // CtlUpdateMotif($idMotif, $libelleMotif, $prixMotif);
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
