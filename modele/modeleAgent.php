<?php
require_once('connect.php');
require_once('modele.php');
require_once('controleur/controleurAgent.php');

function ajouterUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance)
{
  $connexion = getConnect();
  $requete = "INSERT INTO informationpatient VALUES(0,'$nom','$prenom','$nss','$datedenaissance','$adresse','$numtel','$departementdenaissance')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
