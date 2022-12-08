<?php
require_once('controleur/controleurlogin.php');
require_once('vue/gabarit/gabarit.php');
try {
  if (isset($_POST["connect"])) {

    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    CtrVerifierLogin($login, $mdp);
  }
} catch (Exception $e) {
  CtlErreur($e);
}
