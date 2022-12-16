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
  } else if (isset($_POST["validernom"])) {
    $nom = $_POST["modifiernom"];
    CtlModifierNomClient($nom);
  } else if (isset($_POST["validerprenom"])) {
    $prenom = $_POST["modifierprenom"];
    CtlModifierPrenomClient($prenom);
  } else if (isset($_POST["validernss"])) {
    $nss = $_POST["modifiernss"];
    CtlModifierNssClient($nss);
  } else if (isset($_POST["validerdatenaissance"])) {
    $datedenaissance = $_POST["modifierdatenaissance"];
    CtlModifierDateNaissanceClient($datedenaissance);
  } else if (isset($_POST["valideradresse"])) {
    $adresse = $_POST["modifieradresse"];
    CtlModifierAdresseClient($adresse);
  } else if (isset($_POST["validernumtel"])) {
    if (is_numeric($_POST["modifiernumtel"])) {
      $numtel = $_POST["modifiernumtel"];
      CtlModifierNumtelClient($numtel);
    } else {
      CtlErreurNumber();
    }
  } else if (isset($_POST["validerdepartement"])) {
    $departementdenaissance = $_POST["modifierdepartement"];
    CtlModifierDepartementClient($departementdenaissance);
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
  } else if (isset($_POST["modifInforPersonnelAD"])) {
    $idPersonnelAD = $_POST["idPersonnelAD"];
    CtlModifierInforAgentD($idPersonnelAD);
  }
  //elseif(){
  //Commencer modifier les information d'agent
  //}



  // $nom = $_POST["modifiernom"];
  // $prenom = $_POST["modifierprenom"];
  // $nss = $_POST["modifiernss"];
  // $datedenaissance = $_POST["modifierdatenaissance"];
  // $adresse = $_POST["modifieradresse"];
  // $numtel = $_POST["modifiernumtel"];
  // $departementdenaissance = $_POST["modifierdepartement"];
  // CtlModifierInformationClient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance);
  else {
    ctlAcceuille();
  }
} catch (Exception $e) {
  CtlErreur($e);
}
