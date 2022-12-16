<?php
require_once('connect.php');
require_once('modele.php');
require_once('controleur/controleurAgent.php');

function ajouterUnPatient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance, $solde)
{
  $connexion = getConnect();
  $requete = "INSERT INTO informationpatient VALUES(0,'$nom','$prenom','$nss','$datedenaissance','$adresse','$numtel','$departementdenaissance','$solde')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function chercherUnPatient($nom, $prenom)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM informationpatient WHERE nom='$nom' and prenom ='$prenom'";
  $resultat = $connexion->query($requete); //thuc hien cau lenh
  $resultat->setFetchMode(PDO::FETCH_OBJ); // tra ve ket qua duoi dang bang
  $chercher = $resultat->fetchall(); //lay qua trong bang tra ve duoi dang doi tuong
  $resultat->closeCursor();
  return $chercher;
}

// function UpdateInformationClient($nom, $prenom, $nss, $datedenaissance, $adresse, $numtel, $departementdenaissance)
// {
//   $connexion = getConnect();
//   $requete = "UPDATE informationpatient SET nom='$nom',prenom='$prenom',nss='$nss',datenaissance='$datedenaissance',adresse='$adresse',numtel='$numtel',departementnaissance='$departementdenaissance'";
//   $resultat = $connexion->query($requete);
//   $resultat->closeCursor();
// }

function UpdateNomClient($nom)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET nom='$nom'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function recupererNomPrenomAgent($login, $mdp)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM gestionconnect WHERE login= '$login' AND mdp = '$mdp'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererNomPrenom = $resultat->fetchall();
  return $recupererNomPrenom;
}

function UpdatePrenomClient($prenom)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET prenom='$prenom'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateNssClient($nss)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET nss='$nss'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateDateNaissanceClient($datedenaissance)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET datenaissance='$datedenaissance'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateAdresseClient($adresse)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET adresse='$adresse'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateNumtelClient($numtel)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET numtel='$numtel'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function  UpdateDepartementClient($departementdenaissance)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET departementnaissance='$departementdenaissance'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
