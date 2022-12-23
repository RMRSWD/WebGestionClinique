<?php
require_once('connect.php');
require_once('modele.php');
require_once('modele/modeleDirecteur.php');
require_once('controleur/controleurDirecteur.php');


function creerNewLogin($login, $mdp)
{
  $connexion = getConnect();
  $requete = "INSERT INTO gestionconnect VALUES(0,'$login','$mdp','M','null','null')";
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
  $recupererinforM = $resultat->fetchall(); //tra lai toan thong tin theo dong
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

function RecupererTousLesPieces()
{
  $connexion = getConnect();
  $requete = "SELECT * FROM piece";
  $resultat  = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $resultatPiece = $resultat->fetchall();
  $resultat->closeCursor();
  return $resultatPiece;
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

function CreerNouveauMotif($nomMotif, $prixMotif, $numID)
{
  $connexion = getConnect();
  $requete = "INSERT INTO motif VALUES(0,'$nomMotif','$prixMotif', '$numID')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
