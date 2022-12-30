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



function recupererNomPrenomAgent($login, $mdp)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM gestionconnect WHERE login= '$login' AND mdp = '$mdp'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererNomPrenom = $resultat->fetchall();
  return $recupererNomPrenom;
}

function UpdateInforPatient($idPatient, $nomPatient, $prenomPatient, $nssPatient, $datenaissancePatient, $adressePatient, $numtelPatient, $departementPatient, $soldePatient)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET id_Patient='$idPatient', nom='$nomPatient', prenom='$prenomPatient', nss='$nssPatient', datenaissance='$datenaissancePatient', adresse='$adressePatient', numtel='$numtelPatient', departementnaissance = '$departementPatient', solde='$soldePatient' WHERE id_Patient='$idPatient'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererIdPatient($nss2)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM informationpatient WHERE nss='$nss2'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererIdPatient = $resultat->fetch();
  return $recupererIdPatient;
}

function RecupererInformationPatient($numPatient)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM rdv r1 INNER JOIN motif m1 on r1.Id_Motif=m1.Id_Motif INNER JOIN gestionconnect g1 on g1.id=r1.id INNER JOIN informationpatient infoP ON r1.id_Patient=infoP.id_Patient WHERE r1.id_Patient='$numPatient' ";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererInformationPatient = $resultat->fetchall();
  return $recupererInformationPatient;
}

function ChercherNSSAvecDate($chercherNSSDate)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM informationpatient WHERE datenaissance='$chercherNSSDate'";
  $resultat = $connexion->query($requete); //thuc hien cau lenh
  $resultat->setFetchMode(PDO::FETCH_OBJ); // tra ve ket qua duoi dang bang
  $chercherNSSDate = $resultat->fetchAll(); //lay qua trong bang tra ve duoi dang doi tuong
  $resultat->closeCursor();
  return $chercherNSSDate;
}

function RecupererSoldePatient($nssDepot)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM informationpatient WHERE nss='$nssDepot'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererSoldePatient = $resultat->fetch();
  return $recupererSoldePatient;
}

function UpdateSoldePatient($nssDepot, $nouveauSolde)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET  solde='$nouveauSolde' WHERE nss='$nssDepot'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function RecupererPrixMotifRDV($libelleMotifPayement)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM rdv r1 INNER JOIN motif m1 on r1.Id_Motif=m1.Id_Motif WHERE m1.LibelleMo='$libelleMotifPayement'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererPrixMotif = $resultat->fetchall();
  return $recupererPrixMotif;
}
function RecupererSoldePatientPourPayer($idPatient)
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM informationpatient WHERE id_Patient='$idPatient'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $recupererSoldePatient = $resultat->fetch();
  return $recupererSoldePatient;
}

function UpdateNouveauSoldePatient($idPatientPayer, $nouveauSolde)
{
  $connexion = getConnect();
  $requete = "UPDATE informationpatient SET  solde='$nouveauSolde' WHERE id_Patient='$idPatientPayer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function UpdateEtatPayementPatient($idPatientPayer)
{
  $connexion = getConnect();
  $requete = "UPDATE rdv SET  etatRDV='complete' WHERE id_Patient='$idPatientPayer'";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}
function RecupererIdMedecinRDV($nomMedecin, $prenomMedecin)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM gestionconnect WHERE nomP='$nomMedecin'and prenomP='$prenomMedecin'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $idMedecin = $resultat->fetch();
  $resultat->closeCursor();
  return $idMedecin;
}

function RecupererInforRDV($idMedecin)
{
  $connexion = getConnect();
  $requete = "Select * from medecin m1 inner join gestionconnect g1 on m1.id = g1.id INNER JOIN specialise s1 on m1.id = s1.id inner join specialite sp1 on s1.idSP = sp1.idSP inner join travailadmin tr1 on m1.id = tr1.id inner join tacheadmin ta1 on tr1.Id_TacheAdmin = ta1.Id_TacheAdmin where m1.id='$idMedecin'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $idMedecin = $resultat->fetch();
  $resultat->closeCursor();
  return $idMedecin;
}

function RecupeterMotifInTableMotif()
{
  $connexion = getConnect();
  $requete = "SELECT  * FROM motif";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $toutMotif = $resultat->fetchAll();
  return $toutMotif;
}

function RecupererIdPatientInTableInformationPatient($nomPatientPrendRDV, $prenomPatientPrendRDV)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM informationpatient WHERE nom='$nomPatientPrendRDV'and prenom='$prenomPatientPrendRDV'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $idPatient = $resultat->fetch();
  $resultat->closeCursor();
  return $idPatient;
}
function RecupererIdMotifRDVInTableMotif($ChoisirMotifRDV)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM motif WHERE LibelleMo='$ChoisirMotifRDV'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $idMotif = $resultat->fetch();
  $resultat->closeCursor();
  return $idMotif;
}

function  CreerNouveauRDV($datePrendRDV, $idMedecin, $idMotif, $IdPatient)
{
  $connexion = getConnect();
  $requete = "INSERT INTO rdv VALUES(0,'$datePrendRDV','en attente de payement','$idMotif','$IdPatient','$idMedecin')";
  $resultat = $connexion->query($requete);
  $resultat->closeCursor();
}

function SortirPiecesEtConsignes($idMotif)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM motif m1 INNER JOIN cm c1 ON m1.Id_Motif=c1.Id_Motif INNER JOIN consigne cc1 ON c1.Id_Consigne=cc1.Id_Consigne INNER JOIN pm p1 ON m1.Id_Motif=p1.Id_Motif INNER JOIN piece pp1 ON p1.Id_Piece=pp1.Id_Piece where m1.Id_Motif='$idMotif' ";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $InforPieceEtConsigne = $resultat->fetchAll();
  $resultat->closeCursor();
  return $InforPieceEtConsigne;
}

function RecupererIDPatientRDV($nssRDVEnAttendantPay)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM informationpatient WHERE nss='$nssRDVEnAttendantPay'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $InforIDPatient = $resultat->fetch();
  $resultat->closeCursor();
  return $InforIDPatient;
}

function RecupereLesRDVPasPayer($idPatientPayer)
{
  $connexion = getConnect();
  $requete = "SELECT * FROM rdv WHERE etatRDV='en attente de payement' and id_Patient='$idPatientPayer'";
  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
  $InforPatientPasPayer = $resultat->fetchAll();
  $resultat->closeCursor();
  return $InforPatientPasPayer;
}
