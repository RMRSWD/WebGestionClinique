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
    CtlCreerUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance);
  } else {
    ctlAcceuille();
  }
} catch (Exception $e) {
  CtlErreur($e);
}
