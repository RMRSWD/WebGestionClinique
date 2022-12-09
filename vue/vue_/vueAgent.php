<?php
//require_once('controleur/controleurlogin.php');
//require_once('vue/gabarit/gabaritAgent.php');

function afficherAcceuilleAgent()
{
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherAjouterAvecSuccess()
{
  // $contenu = '<p> Un nouveau patient a été validé </p>';
  $contenu = '<script> 
  alert("Un nouveau patient a été validé")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}
