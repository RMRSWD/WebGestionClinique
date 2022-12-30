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
function RecupererIdTaAdmin($valeur)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM tacheadmin WHERE DateTa='$valeur'";
  $resultat = $connexion->query($requete); //thuc hien cau lenh
  $resultat->setFetchMode(PDO::FETCH_OBJ); // tra ve ket qua duoi dang bang
  $idTaAdmin = $resultat->fetch(); //lay qua trong bang tra ve duoi dang doi tuong
  $resultat->closeCursor();
  return $idTaAdmin;
}

function SupprimerInTableTravailAdmin($IdTaAdmin)
{
  $connexion = getConnect();
  $requete = "DELETE FROM travailadmin WHERE Id_TacheAdmin='$IdTaAdmin'";
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
function RecupererIdMedecin($nomMedecin, $prenomMedecin)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM gestionconnect WHERE nomP='$nomMedecin'and prenomP='$prenomMedecin'";
  $resultat = $connexion->query($requete); //thuc hien cau lenh
  $resultat->setFetchMode(PDO::FETCH_OBJ); // tra ve ket qua duoi dang bang
  $idMedecin = $resultat->fetch(); //lay qua trong bang tra ve duoi dang doi tuong
  $resultat->closeCursor();
  return $idMedecin;
}

function RecupererIdRDVAdministratif($motifRDVAdmin)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM tacheadmin WHERE LibelleTa='$motifRDVAdmin'";
  $resultat = $connexion->query($requete); //thuc hien cau lenh
  $resultat->setFetchMode(PDO::FETCH_OBJ); // tra ve ket qua duoi dang bang
  $idTaAdmin = $resultat->fetch(); //lay qua trong bang tra ve duoi dang doi tuong
  $resultat->closeCursor();
  return $idTaAdmin;
}

function CreerRDVInTravailAdmin($idMedecin, $idTaAdmin)
{
  $connexion = getConnect();
  $requete = "INSERT INTO travailadmin VALUES('$idMedecin','$idTaAdmin')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
