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
      CtlAccueilAgent();


      #return true;
    } elseif ($a == "M") {
      CtlAcceuilMedecin();

      //			code...
    } elseif ($a == "D") {
      CtlAccueilDirect();
    }
  } else {
    AfficherErreurLogin();
  }
}

function CtlErreur($erreur)
{
  afficherErreur($erreur);
}
