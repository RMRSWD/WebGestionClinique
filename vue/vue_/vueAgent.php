<?php


function afficherAcceuilleAgent($nom, $prenom)
{
  // $contenuNomPrenom = 'Bonjour ' . $nom . ' ' . $prenom;

  require_once('vue/gabarit/gabaritAgent.php');
}
function deconnexionAgent()
{
  require_once('vue/gabarit/gabarit.php');
}

function afficherAjouterAvecSuccess()
{
  $contenu = '<script> 
  alert("Un nouveau patient a été validé")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}
function afficherErreurPasNumber()
{
  $afficherErreurChiffre = '<script> 
  alert("Veuillez saisir les chiffres pour effectuer cette action. Re-saisir!!!")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherAjouterSoldeAvecSuccess()
{
  $afficherAjouterSoldeAvecSuccess = '<script> 
  alert("Ajouter avec success")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherPayerAvecSuccess()
{
  $afficherPayerAvecSuccess = '<script> 
  alert("Le payement a effectué avec success.")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherPayementPasSuccess()
{
  $afficherPayementPasSuccess = '<script> 
  alert("Le solde du patient est insuffit pour effectuer cette action.")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherErreurSPPasCoresspondre()
{
  $afficherErreurSPPasCorrespondre = '<script> 
  alert("le spécialité du médecin est pas correspondant.Re-saisir le spécialité du médecin.")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherEnregisterRDVAvecSuccess()
{
  $afficherEnregisterSuccess = '<script> 
  alert("Votre rendez vous pour ce jour a bien enregistré.")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}


function afficherPatient($patient)
{
  $afficherpatient = '<form action="site.php" method= "POST" id="form_modifierinformationpatient"> <fieldset> <legend>Afficher les bases de patient</legend>
  <i>Pour modifier les informations d\'un patient. Vous cliquez directement sur le champ que vous voulez modifier. Ensuite, cliquez sur le bouton "Enregistrer" pour enregistrer les informations. </i>';
  if ($patient == null) {
    $afficherpatient .= 'aucune ligne ne repond à votre requete';
  } else {
    foreach ($patient as $ligne) {
      $afficherpatient .= '
            <table border="1" align="center" cellspacing="0"cellpadding="0" with="850px">
            <tr>
            <td colspan="2"><h2>Modifier Information Patient</h2></td>
            </tr>
            <tr>
            <td>ID </td>
            <td> <input type="text" name="idPatient" readonly="readonly" value="' . $ligne->id_Patient . '"> </td>
            </tr>
            <tr>
            <td>Nom </td>
            <td> <input type="text" name="nomPatient" value="' . $ligne->nom . '"> </td>
            </tr>
            <td>Prénom </td>
            <td> <input type="text" name="prenomPatient"  value="' . $ligne->prenom . '"> </td>
            </tr>
            <td>NSS </td>
            <td> <input type="text" name="nssPatient"  value="' . $ligne->nss . '"> </td>
            </tr>
            <td>Date de naissance </td>
            <td> <input type="date" name="datenaissancePatient"  value="' . $ligne->datenaissance . '"> </td>
            </tr>
            <td>Adresse </td>
            <td> <input type="text" name="adressePatient"  value="' . $ligne->adresse . '"> </td>
            </tr>
            <td>Numéro de téléphone </td>
            <td> <input type="text" name="numtelPatient"  value="' . $ligne->numtel . '" maxlength="10"> </td>
            </tr>
            <td>Département de naissance </td>
            <td> <input type="text" name="departementPatient"  value="' . $ligne->departementnaissance . '"> </td>
            </tr>
            <td>Solde patient</td>
            <td> <input type="text" name="soldePatient"  value="' . $ligne->solde . '"> </td>
            </tr>
            <tr>
            <td colspan="2" align="center">
            <input type="submit" name="modifierInforPatient" value="Enregistrer">
            </td>
            </tr>
            </table>
            
            ';
    }
    $afficherpatient .= '</fieldset></form>';

    require_once('vue/gabarit/gabaritAgent.php');
  }
}

function affchierModifierAvecSucess()
{
  $afficherModifierAvecSucess = '<script type="text/javascript"> 
  alert("Votre modification est bien enregistrée")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}


function afficherSynthesePatient($inforPatient)
{
  $affichersynthesepatient = '<form method="POST" action="site.php">
  <fieldset>
  <legend>Systhèse d\'un patient</legend>
  ';
  foreach ($inforPatient as $ligne) {
    $affichersynthesepatient .= '
    <p>
    <lable>Id Patient:</lable>
    <input type="text" value="' . $ligne->id_Patient . '" readonly="readonly">
    </p>
    <p>
    <lable>Etat RDV:</lable>
    <input type="text" value="' . $ligne->etatRDV . '" readonly="readonly"></p>
    <p>
    <lable>Libelle RDV:</lable>
    <input type="text" value="' . $ligne->LibelleMo . '" readonly="readonly"></p>
    <p>
    <lable>Date RDV:</lable>
    <input type="datetime-local" value="' . $ligne->dateRDV . '" readonly="readonly"></p>
    <p>
    <lable>IPrix:</lable>
    <input type="text" value="' . $ligne->PrixMo . '" readonly="readonly"> Euros</p>
    <lable>Solde De Patient:</lable>
    <input type="text" value="' . $ligne->solde . '" readonly="readonly"> Euros</p>
    
    ';
  }

  $affichersynthesepatient .= '</fieldset></form>';

  require_once("vue/gabarit/gabaritAgent.php");
}

function afficherNSSPatient($NSSPatient)
{

  $afficherNSSPatient = '<form method="POST" action="site.php">
  <fieldset>
  <legend>NSS du Patient</legend>
  ';
  foreach ($NSSPatient as $ligne) {
    $afficherNSSPatient .= '
    <p>
    <lable>NSS:</lable>
    <input type="text" value="' . $ligne->nss . '" readonly="readonly">
    </p>
  
    ';
  }

  $afficherNSSPatient .= '</fieldset></form>';

  require_once("vue/gabarit/gabaritAgent.php");
}

function AfficherPrixMotifRDV($prixMotif)
{
  $afficherPrixMotifRDV = '<form method="POST" action="site.php">
  <fieldset>
  <legend>NSS du Patient</legend>
  ';
  foreach ($prixMotif as $ligne) {
    $afficherPrixMotifRDV .= '
    <p>
    <input type="hidden" name="idPatientPayer" value="' . $ligne->id_Patient . '">
    </p>
    <p>
    <lable>Prix Motif RDV:</lable>
    <input type="text" name="prixMotifPayer" value="' . $ligne->PrixMo . '" readonly="readonly"> Euros
    </p>
    <p>
    <input type="submit" name="effectuerLePayement" value="Effectuer le payement">
    </p>
  
    ';
  }

  $afficherPrixMotifRDV .= '</fieldset></form>';

  require_once("vue/gabarit/gabaritAgent.php");
}


function afficherPreciserMotif($toutMotif, $nomPatientPrendRDV, $prenomPatientPrendRDV, $nomMedicinPrendRDV, $prenomMedecinPrendRDV, $datePrendRDV)
{
  $afficherToutMotif = '<form method="POST" action="site.php">
  <fieldset>
  <legend>Tous Les Motif RDV</legend>
  <p>Vous pouvez prendre ce rendez-vous.</p>
  <p>
  <input type="hidden" name="nomPatientEnregistrerRDV" value="' . $nomPatientPrendRDV . '">
  </p>
  <p>
  <input type="hidden" name="prenomPatientEnregistrerRDV" value="' . $prenomPatientPrendRDV . '">
  </p>
  <p>
  <input type="hidden" name="nomMedecinEnregistrerRDV" value="' . $nomMedicinPrendRDV . '">
  </p>
  <p>
  <input type="hidden" name="prenomMedecinEnregistrerRDV" value="' . $prenomMedecinPrendRDV . '">
  </p>
  <p>
  <input type="hidden" name="dateEnregisterRDV" value="' . $datePrendRDV . '">

  </p>
  <select name="ChoisirMotifRDV">';

  foreach ($toutMotif as $ligne) {
    $afficherToutMotif .= '
    <option value="' . $ligne->LibelleMo . '">' . $ligne->LibelleMo . '</option>
    ';
  }


  $afficherToutMotif .= '
  <option>...</option>
  </select> 
  <p><input type="submit" name="validerRDV" value="Valider"></p>
  </fieldset></form> ';
  require_once("vue/gabarit/gabaritAgent.php");
}

function  afficherPiecesEtConsignes($pieceEtConsigne)
{

  $Consigne = $pieceEtConsigne[0]->LibelleCo;
  $LibellePiece = $pieceEtConsigne[0]->LibellePi;

  $afficherPiecesEtConsignes = '<form method="POST" action="site.php">
  <fieldset>
  <legend>Tous Les Motif RDV</legend>
<p>Consignes:<input type="text" value="' . $Consigne . '"readonly="readonly"></p> 
<p>Pieces:<input type="text" value="' . $LibellePiece . '"readonly="readonly"></p> 

  ';


  foreach ($pieceEtConsigne as $ligne) {
    if ($ligne->LibelleCo != $Consigne) {
      $afficherPiecesEtConsignes .= '
  <p>Consignes: <input type="text" value="' . $ligne->LibelleCo . '"readonly="readonly"></>
    ';
    } else if ($ligne->LibellePi != $LibellePiece) {
      $afficherPiecesEtConsignes .= '
      <p>Pieces: <input type="text" value="' . $ligne->LibellePi . '" readonly="readonly"></p>';
    }
  }


  $afficherPiecesEtConsignes .= '
  
  </fieldset></form> ';
  require_once("vue/gabarit/gabaritAgent.php");
}

function afficherLesRDVPasPayer($inforPatientPasPayer)
{
  $afficherRDVPasPayer = '<form method="POST" action="site.php">
  <fieldset>
  <legend>Les rendez-vous pas encore payer </legend>
  <table>
  <tr>
    <td colspan="2">ID:<input type="text" value="' . $inforPatientPasPayer[0]->idRDV . '"readonly="readonly"></td>
    </tr>
  ';
  foreach ($inforPatientPasPayer as $ligne) {
    $afficherRDVPasPayer .= '
    <tr>
    <td>Jour et heure: <input type="text" value="' . $ligne->dateRDV . '" readonly="readonly"></td>
    <td>Etat rendez-vous: <input type="text" value="' . $ligne->etatRDV . '"readonly="readonly"></td>
    </tr>
    
   
    ';
  }
  $afficherRDVPasPayer .= '
  </table></fieldset></form> ';
  require_once("vue/gabarit/gabaritAgent.php");
}
