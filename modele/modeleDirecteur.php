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
function recupererInfoModifAgent($idPersonnelAD)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM  gestionconnect WHERE id='$idPersonnelAD'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererinformodifA = $resultat->fetchall();
  return $recupererinformodifA;
}
