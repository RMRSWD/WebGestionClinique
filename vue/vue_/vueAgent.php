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
// function afficherPatient($patient)
// {
//   $afficherpatient = '<form action="site.php" method= "POST" id="form_modifierinformationpatient"> <fieldset> <legend>Afficher les bases de patient</legend>';
//   if ($patient == null) {
//     $afficherpatient .= 'aucune ligne ne repond à votre requete';
//   } else {
//     foreach ($patient as $ligne) {
//       $afficherpatient .= '
//       <p>
//       <label for=""> ID Client: </label> <input type="text" name="idPatient" readonly="readonly" value=' . $ligne->id . '></p> 
//       <p>
//       <input type="checkbox" onclick="affichernewlignenom(\'newlignenom\')">
//       <label for="">Nom: ' . $ligne->nom . '</label>
//       <script>
//       function affichernewlignenom(n) {
//         document.getElementById(n).innerHTML += \'<p>Modifier nom: <input type="text" name="modifiernom" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernom" value="Valider"></p> \';

//       }
//       </script>
//       <p id="newlignenom"></p>
//       </p>


//   <p>
//     <input type="checkbox" name="checkprenom" onclick="affichernewligneprenom(\'newligneprenom\')">
//     <label for="">Prénom:' . $ligne->prenom . ' </label>
//     <script type="text/javascript">
//       function affichernewligneprenom(n) {
//         document.getElementById(n).innerHTML += \'<p>Modifier prénom: <input type="text" name="modifierprenom" value=""></p>\'
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerprenom" value="Valider"></p> \';
//       }
//     </script>
//   <p id="newligneprenom"></p>
//   </p>


//       <p><input type="checkbox" name="checknss" onclick="affichernewlignenss(\'newlignenss\')" ><label for="">NSS: ' . $ligne->nss . ' </label>
//       <script type="text/javascript" >
//       function affichernewlignenss(n) { 
//         document.getElementById(n).innerHTML += \'<p>Modifier numéro du sécurité social: <input type="text" name="modifiernss" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernss" value="Valider"></p> \';
//       }
//       </script>
//       <p id="newlignenss"></p>
//       </p> 
//       <p><input type="checkbox" name="checkdatenaissance" onclick="affichernewlignedatenaissance(\'newdatenaissance\')" ><label for="">Date de naissance: ' . $ligne->datenaissance . ' </label>
//       <script type="text/javascript" >
//       function affichernewlignedatenaissance(n) { 
//         document.getElementById(n).innerHTML += \'<p>Modifier date de naissance: <input type="date" name="modifierdatenaissance" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerdatenaissance" value="Valider"></p> \';

//       }
//       </script>
//       <p id="newdatenaissance"></p>

//       </p> 

//       <p><input type="checkbox" name="checkadresse" onclick="affichernewligneadresse(\'newligneadresse\')" ><label for="">Adresse: ' . $ligne->adresse . ' </label> 
//       <script type="text/javascript" >
//       function affichernewligneadresse(n) { 
//         document.getElementById(n).innerHTML += \'<p>Modifier adresse: <input type="text" name="modifieradresse" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="valideradresse" value="Valider"></p> \';

//       }
//       </script>
//       <p id="newligneadresse"></p>

//       </p> 
//       <p><input type="checkbox"name="checknumtel" onclick="affichernewlignenumtel(\'newlignenumtel\')"><label for="">Numéro de téléphone:' . $ligne->numtel . ' </label>
//       <script type="text/javascript" >
//       function affichernewlignenumtel(n) { 
//         document.getElementById(n).innerHTML += \'<p>Modifier numéro de téléphone: <input type="text" name="modifiernumtel" id="checknumber" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernumtel" value="Valider"></p> \';
//       }
//       </script>


//       <p id="newlignenumtel"></p>

//       </p> 

//       <p><input type="checkbox" name="checkdepartementnaissance" onclick="affichernewlignedepartement(\'newlignedepartement\')" ><label for="">Département de naissance: ' . $ligne->departementnaissance . '</label>
//       <script type="text/javascript" >
//       function affichernewlignedepartement(n) { 
//         document.getElementById(n).innerHTML += \'<p>Modifier département de naissance: <input type="text" name="modifierdepartement" value=""></p>\';
//         document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerdepartement" value="Valider"></p> \';
//       }
//       </script>
//       <p id="newlignedepartement"></p>

//       </p> 

//       ';
//     }
//   }
//   $afficherpatient .= '</fieldset></form>';

//   require_once('vue/gabarit/gabaritAgent.php');
// }

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
            <td> <input type="text" name="idPatient" readonly="readonly" value="' . $ligne->id . '"> </td>
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

// function afficherErreurNumber()
// {
//   $afficherErreurChiffre = '<script type="text/javascript"> 
//   alert("Numéro de téléphone est invalide")
//   </script>';
//   require_once('vue/gabarit/gabaritAgent.php');
// }
