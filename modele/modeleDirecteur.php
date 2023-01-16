<?php
require_once('connect.php');
require_once('modele.php');
require_once('modele/modeleDirecteur.php');
require_once('controleur/controleurDirecteur.php');


function creerNewLoginMedecin($login, $mdp)
{
  $connexion = getConnect();
  $requete = "INSERT INTO gestionconnect VALUES(0,'$login','$mdp','M','null','null')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function creerNewLoginAgent($login, $mdp)
{
  $connexion = getConnect();
  $requete = "INSERT INTO gestionconnect VALUES(0,'$login','$mdp','A','null','null')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function creerNewLoginDirecteur($login, $mdp)
{
  $connexion = getConnect();
  $requete = "INSERT INTO gestionconnect VALUES(0,'$login','$mdp','D','null','null')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function recupererInfoAgent()
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE genre='A'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinforA = $resultat->fetchall();
  return $recupererinforA;
}
function recupererInfoMedecin()
{
  $connexion = getConnect();
  $resultat = "SELECT  * FROM  gestionconnect WHERE genre='M'";
  $resultat = $connexion->query($resultat);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinforM = $resultat->fetchall();
  return $recupererinforM;
}
function recupererInfoModif($idPersonnelD)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE id='$idPersonnelD'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinformodif = $resultat->fetch();
  return $recupererinformodif;
}
function recupererInfoModifAgent($idPersonnelD)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE id='$idPersonnelD'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinformodifA = $resultat->fetchall();
  return $recupererinformodifA;
}
function recupererInfoModifMedecin($idPersonnelD)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE id='$idPersonnelD'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinformodifM = $resultat->fetchall();
  return $recupererinformodifM;
}

function recupererInfoModifDirecteur($idPersonnelD)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE id='$idPersonnelD'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinformodifM = $resultat->fetchall();
  return $recupererinformodifM;
}

function UpdateInforAgent($idAgent, $loginAgent, $mdpAgent, $nomAgent, $prenomAgent)
{
  $connexion = getConnect();
  $requete = "UPDATE gestionconnect SET id='$idAgent', login='$loginAgent', mdp='$mdpAgent', genre='A', mdp='$mdpAgent', nomP='$nomAgent', prenomP='$prenomAgent' WHERE id='$idAgent'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateInforMedecin($idMedecin, $loginMedecin, $mdpMedecin, $nomMedecin, $prenomMedecin)
{
  $connexion = getConnect();
  $requete = "UPDATE gestionconnect SET id='$idMedecin', login='$loginMedecin', mdp='$mdpMedecin', genre='A', mdp='$mdpMedecin', nomP='$nomMedecin', prenomP='$prenomMedecin' WHERE id='$idMedecin'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function UpdateInforDirecteur($idDirecteur, $loginDirecteur, $mdpDirecteur, $nomDirecteur, $prenomDirecteur)
{
  $connexion = getConnect();
  $requete = "UPDATE gestionconnect SET id='$idDirecteur', login='$loginDirecteur', mdp='$mdpDirecteur', genre='D', mdp='$mdpDirecteur', nomP='$nomDirecteur', prenomP='$prenomDirecteur' WHERE id='$idDirecteur'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererIdMotif($nomMotif)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM motif WHERE LibelleMo = '$nomMotif'";
  $resultat  = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatIdMotif = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatIdMotif;
}

function RecupererIdPiece($choisirLesPieces)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM piece WHERE LibellePi='$choisirLesPieces'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatID = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatID;
}

function CreerNouveauMotif($nomMotif, $prixMotif)
{
  $connexion = getConnect();
  $requete = "INSERT INTO motif VALUES(0,'$nomMotif','$prixMotif')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function CreerNouveauPiece($choisirLesPieces)
{
  $connexion = getConnect();
  $requete = "INSERT INTO piece VALUES(0,'$choisirLesPieces')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function  CreerNouveauConsigne($nomConsigneFournit)
{
  $connexion = getConnect();
  $requete = "INSERT INTO consigne VALUES(0,'$nomConsigneFournit')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function RecupererIdConsigne($nomConsigneFournit)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM consigne WHERE LibelleCo='$nomConsigneFournit'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatID = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatID;
}
function CreerNouveauIdMotifEtIdConsigneInTableCM($numMo, $numConsigne)
{
  $connexion = getConnect();
  $requete = "INSERT INTO CM VALUES('$numMo','$numConsigne')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function CreerNouveauIdMotifEtIdPieceInTablePM($numMo, $numPi)
{
  $connexion = getConnect();
  $requete = "INSERT INTO PM VALUES('$numMo','$numPi')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererInforInTablePMETMotifEtPiece($idMotif)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM motif m INNER JOIN pm ON m.Id_Motif = pm.Id_Motif INNER JOIN piece p ON p.Id_Piece=pm.Id_Piece WHERE m.Id_Motif= '$idMotif'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatInfoModifMotif = $resultat->fetchall();
  $resultat->closeCursor();
  return $resultatInfoModifMotif;
}


function UpdateMotif($idMotif, $libelleMotif, $prixMotif)
{

  $connexion = getConnect();
  $requete = "UPDATE motif SET LibelleMo='$libelleMotif', PrixMo='$prixMotif' WHERE Id_Motif='$idMotif'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function UpdatePiece($idPiece, $nomPiece)
{

  $connexion = getConnect();
  $requete = "UPDATE piece set LibellePi = '$nomPiece' where Id_Piece='$idPiece'";

  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererIdPieceInTablePM($IDMotifSupprimer)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM pm WHERE Id_Motif = '$IDMotifSupprimer'";
  $resultat  = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatIdMotif = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatIdMotif;
}

function SupprimerInTablePM($IDMotifSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM pm WHERE Id_Motif='$IDMotifSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function SupprimerMotif($libelleMotif)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM motif WHERE LibelleMo='$libelleMotif'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function  SupprimerPiece($IdPieceSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM piece WHERE Id_Piece='$IdPieceSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function CreerNomPrenomMedecin($numMedecin, $nomMedecin, $prenomMedecin)
{
  $connexion = getConnect();
  $requete = "UPDATE gestionconnect SET nomP='$nomMedecin', prenomP='$prenomMedecin' WHERE id='$numMedecin'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function Creerid_InTableMedecin($numMedecin)
{
  $connexion = getConnect();
  $requete = "INSERT INTO medecin VALUES($numMedecin)";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function CreerSpecialiteInTableSpecialite($specialiteMedecin)
{
  $connexion = getConnect();
  $requete = "INSERT INTO specialite VALUES(0,'$specialiteMedecin')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function RecupererInforSpecialite($specialiteMedecin)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM specialite WHERE LibelleSP='$specialiteMedecin'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatInforSpecialite = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatInforSpecialite;
}
function CreerIdPersonnelEtIdSpecialiteInTableSpecialise($numMedecin, $idSpecialite)
{
  $connexion = getConnect();
  $requete = "INSERT INTO specialise VALUES('$numMedecin','$idSpecialite')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererInforInTableSpecialise($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM specialise WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatInforSpecialise = $resultat->fetch();
  $resultat->closeCursor();
  return $resultatInforSpecialise;
}

function SupprimerIdMedecinInTabnleSpecialise($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM specialise WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function SupprimerIdInTableSpecialite($idSpecialite)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM specialite WHERE idSP='$idSpecialite'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function SupprimerIdMedecinInTableRDV($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE FROM rdv WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function SupprimerIdInTableMedecin($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE FROM medecin WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function SupprimerIdMedecinInTableTravailAdmin($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE FROM travailadmin WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function SupprimerIdMedecinInTableGestionConnect($id_MedecinSupprimer)
{
  $connexion = getConnect();
  $requete = "DELETE  FROM gestionconnect WHERE id='$id_MedecinSupprimer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
