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
    $creelogin = $_POST["creelogin"];
    $creemdp = $_POST["creepassword"];
    CtrCreerNewLogin($creelogin, $creemdp);
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
  }

  // Créer un motif 

  else if (isset($_POST["afficherPiece"])) {
    CtlAfficherTousPieces();
  } else if (isset($_POST["validerMotif"])) {
    $nomMotif = $_POST["nomMotif"];
    $prixMotif = $_POST["prixMotif"];
    $choisirLesPieces = "";
    foreach ($_POST["choisirLesPieces"] as $element) {
      if (empty($element)) {
        echo "pas d'élément";
      } else {
        $choisirLesPieces = $element;
        CtlCreerMotifD($nomMotif, $prixMotif, $choisirLesPieces);
      }
      // for ($i = 0; $i < $nombreElement; $i++) {
      //   echo $element[$i];
      // }
    }
    echo $choisirLesPieces;


    // $choisirLesPieces = $_POST["choisirLesPieces"];
    // echo $choisirLesPieces;
  } else {
    ctlAcceuille();
  }
} catch (Exception $e) {
  CtlErreur($e);
}
