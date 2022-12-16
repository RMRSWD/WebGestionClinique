<?php
require_once('modele/modele.php');
require_once('vue/vue_/vue.php');
require_once('controleurAgent.php');
require_once('controleurMedecin.php');
require_once('controleurDirecteur.php');


function ctlAcceuille()
{
  afficherAcceuille();
}

function CtrVerifierLogin($login, $mdp)
{
  $check = checkUser($login, $mdp);
  if (!empty($check)) {
    $a = $check->genre;

    if ($a == "A") {
      $_SESSION['agentAcceuil'] = $check;
      CtlAccueilAgent();


      #return true;
    } elseif ($a == "M") {
      $_SESSION['Medecin'] = $check;
      CtlAcceuilMedecin();

      //			code...
    } elseif ($a == "D") {
      // if (!isset($_SESSION['Directeur'])) {
      //   session_start();
      // } else {
      $_SESSION['Directeur'] = $check;
      CtlAccueilDirect();
      // }

      // CtlAccueilDirect();
    }
  } else {
    echo ("Login ou mot de passe incorrect");

    // throw new Exception("Login ou mot de passe incorrect");
  }
}

function CtlErreur($erreur)
{
  afficherErreur($erreur);
}
