<?php


function afficherAcceuilleAgent($nom, $prenom)
{
  // $contenuNomPrenom = 'Bonjour ' . $nom . ' ' . $prenom;

  require_once('vue/gabarit/gabaritAgent.php');
}

// function afficherNomPrenom($nomPrenomAgent)
// {
//   $contenuNomPrenom = '';
//   if (!empty($nomPrenomAgent)) {
//     $contenuNomPrenom .= '<p>';

//     foreach ($nomPrenomAgent as $ligne) {
//       echo $ligne->nomP . ' ' . $ligne->prenomP;
//       $contenuNomPrenom .= 'Bonjour ' . $ligne->nomP . ' ' . $ligne->prenomP;
//     }

//     $contenuNomPrenom .= '</p>';
//   } else {
//     echo "khong chay roi";
//   }
//   $ppp = "rtyuohiumiyuo_iuyhç_oiu";
//   require_once('vue/gabarit/gabaritAgent.php');
// }
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
function afficherPatient($patient)
{

  $afficherpatient = '<form action="site.php" method= "POST" id="form_modifierinformationpatient"> <fieldset> <legend>Afficher les bases de patient</legend>';
  if ($patient == null) {
    $afficherpatient .= 'aucune ligne ne repond à votre requete';
  } else {
    foreach ($patient as $ligne) {
      $afficherpatient .= '
      <p><label for=""> ID Client: ' . $ligne->id . '</label></p> 
      <p><input type="checkbox" name="checknom" onclick="affichernewlignenom(\'newlignenom\')" ><label for="">Nom:' . $ligne->nom . ' </label>
      <script type="text/javascript" >
      function affichernewlignenom(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier nom: <input type="text" name="modifiernom" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernom" value="Valider"></p> \';
      }
      </script;>
      <p id="newlignenom"></p>
      </p> 
      <p><input type="checkbox" name="checkprenom" onclick="affichernewligneprenom(\'newligneprenom\')"><label for="">Prénom:' . $ligne->prenom . ' </label>
      <script type="text/javascript" >
      function affichernewligneprenom(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier prénom: <input type="text" name="modifierprenom" value=""></p>\'
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerprenom" value="Valider"></p> \';
        ;
      }
      </script>
      <p id="newligneprenom"></p>
      </p> 

      <p><input type="checkbox" name="checknss" onclick="affichernewlignenss(\'newlignenss\')" ><label for="">NSS: ' . $ligne->nss . ' </label>
      <script type="text/javascript" >
      function affichernewlignenss(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier numéro du sécurité social: <input type="text" name="modifiernss" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernss" value="Valider"></p> \';

      }
      </script>
      <p id="newlignenss"></p>
      </p> 
      <p><input type="checkbox" name="checkdatenaissance" onclick="affichernewlignedatenaissance(\'newdatenaissance\')" ><label for="">Date de naissance: ' . $ligne->datenaissance . ' </label>
      <script type="text/javascript" >
      function affichernewlignedatenaissance(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier date de naissance: <input type="date" name="modifierdatenaissance" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerdatenaissance" value="Valider"></p> \';

      }
      </script>
      <p id="newdatenaissance"></p>
    
      </p> 

      <p><input type="checkbox" name="checkadresse" onclick="affichernewligneadresse(\'newligneadresse\')" ><label for="">Adresse: ' . $ligne->adresse . ' </label> 
      <script type="text/javascript" >
      function affichernewligneadresse(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier adresse: <input type="text" name="modifieradresse" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="valideradresse" value="Valider"></p> \';

      }
      </script>
      <p id="newligneadresse"></p>
      
      </p> 
      <p><input type="checkbox"name="checknumtel" onclick="affichernewlignenumtel(\'newlignenumtel\')"><label for="">Numéro de téléphone:' . $ligne->numtel . ' </label>
      <script type="text/javascript" >
      function affichernewlignenumtel(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier numéro de téléphone: <input type="text" name="modifiernumtel" id="checknumber" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernumtel" value="Valider"></p> \';
      }
      </script>


      <p id="newlignenumtel"></p>
      
      </p> 

      <p><input type="checkbox" name="checkdepartementnaissance" onclick="affichernewlignedepartement(\'newlignedepartement\')" ><label for="">Département de naissance: ' . $ligne->departementnaissance . '</label>
      <script type="text/javascript" >
      function affichernewlignedepartement(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier département de naissance: <input type="text" name="modifierdepartement" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerdepartement" value="Valider"></p> \';
      }
      </script>
      <p id="newlignedepartement"></p>
      
      </p> 
      
      ';
    }
  }
  $afficherpatient .= '</fieldset></form>';

  //       $afficherpatient .= '<p><input type="button" name="modifierdonnee" value="Valider" onclick="checknumber()"> <input type="reset" name="resetdonnee" value="Effacer" </p>

  //       <script type="text/javascript> 
  // function checknumber(){
  //   var number = document.getElementById(\'checknumber\').value;
  //   if(isNaN(number)){
  //     alert(\'Please enter a valid number\');
  // }
  // </script>
  //       </fieldset></form>';

  //       $afficherpatient .= '<script type="text/javascript> 
  // function checknumber(){
  //   var number = document.getElementById(\'checknumber\').value;
  //   if(isNaN(number)){
  //     alert(\'Please enter a valid number\');
  // }
  // </script>';

  require_once('vue/gabarit/gabaritAgent.php');
}

function affchierModifierAvecSucess()
{
  $afficherModifierAvecSucess = '<script type="text/javascript"> 
  alert("Votre modification est bien enregistrée")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}

function afficherErreurNumber()
{
  $afficherErreurChiffre = '<script type="text/javascript"> 
  alert("Numéro de téléphone est invalide")
  </script>';
  require_once('vue/gabarit/gabaritAgent.php');
}
