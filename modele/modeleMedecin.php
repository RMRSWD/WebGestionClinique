<?php
require_once('connect.php');
require_once('modele.php');
require_once('controleur/controleurMedecin.php');

function CreerUnRDVAdmin($dateRDVAdmin, $motifRDVAdmin)
{
  $connexion = getConnect();
  $requete = "INSERT INTO tacheadmin VALUES(0,'$dateRDVAdmin','$motifRDVAdmin')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function BloquerCreneau($valeur)
{
  $connexion = getConnect();
  $requete = "DELETE FROM tacheadmin WHERE DateTa='$valeur'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
