<?php
require_once('controleur/controleurlogin.php');

function afficherAcceuille()
{
  $contenue = '';
  require_once('vue/gabarit/gabarit.php');
}

function afficherErreur($erreur)
{
  $contenue = '<p>Erreur de type :' . $erreur . '</p>';
  require_once('vue/gabarit/gabarit.php');
}
