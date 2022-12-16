<?php
if (strlen(session_id()) < 1) session_start();
function afficherAcceuilleDirecteur($nom, $prenom)

{
  require_once('vue/gabarit/gabaritDirecteur.php');
}
function deconnexion()

{
  // $deconnexion = '';
  // $deconnexion .= '
  // <script> 
  // alert("Vous avez déconnecté")
  // </script>';
  //require_once('vue/gabarit/gabaritDirecteur.php');
  require_once('vue/gabarit/gabarit.php');
}

function afficherCreerSucess()
{
  $afficherCreerSucess = '';
  $afficherCreerSucess .= '<script>
  alert("un nouveau médecin est bien créé");
  </script>';
  // if (!isset($_SESSION['Directeur'])) {
  //   session_start();
  // } else {
  //   session_start();
  // }
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherInforAgent($inforAgent)
{
  $contenuPersonnelAD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Tous Les Agents</legend>';
  foreach ($inforAgent as $ligne) {
    $contenuPersonnelAD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>

    <p><label>Login: ' . $ligne->login . '</label> </p> 


    <p><label> Mot  de passe: ' . $ligne->mdp . '</label></p>


    <p<label> Nom: ' . $ligne->nomP . '</label></p>


    <p><label>Prenom: ' . $ligne->prenomP . '</label>
    </p><hr>
    ';
  }
  $contenuPersonnelAD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}
function afficherPourModifierInforAgent($informodifAgent)
{
  $contenuModifLogMotAD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Afficher les bases d\'agent</legend>';
  foreach ($informodifAgent as $ligne) {
    $contenuModifLogMotAD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>

    <p><input type="checkbox" name="choixloginAD" onclick="affichernewlignelogin(\'newlignelogin\')"><label>Login: ' . $ligne->login . '</label>
    <script type="text/javascript" >
      function affichernewlignelogin(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier login: <input type="text" name="modifierlogin" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerloginD" value="Valider"></p> \';
      }
      </script>
      <p id="newlignelogin"></p>
    </p> 


    <p><input type="checkbox" name="choixmdp" onclick="affichernewlignemdp(\'newlignemdp\')"><label> Mot  de passe: ' . $ligne->mdp . '</label>
    <script type="text/javascript" >
      function affichernewlignemdp(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifierlogin" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validermdpD" value="Valider"></p> \';
      }
      </script>
      <p id="newlignemdp"></p>
    </p>


    <p><input type="checkbox" name="choixNomAD" onclick="affichernewlignenom(\'newlignenom\')"><label> Nom: ' . $ligne->nomP . '</label>
    <script type="text/javascript" >
      function affichernewlignenom(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifiernom" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernomD" value="Valider"></p> \';
      }
      </script>
      <p id="newlignenom"></p>
    </p>


    <p><input type="checkbox" name="choixPrenomAD" onclick="affichernewligneprenom(\'newligneprenom\')"><label>Prenom: ' . $ligne->prenomP . '</label>
    <script type="text/javascript" >
      function affichernewligneprenom(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifiernom" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernomD" value="Valider"></p> \';
      }
      </script>
      <p id="newligneprenom"></p>
    </p>
    ';
  }
  $contenuModifLogMotAD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherInforMedecin($inforMedecin)
{
  $contenuPersonnelMD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Afficher les bases de medecin</legend>';
  foreach ($inforMedecin as $ligne) {
    $contenuPersonnelMD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>
    <p><label>Login: ' . $ligne->login . '</label></p> 


    <p><label> Mot  de passe: ' . $ligne->mdp . '</label></p>


    <p><label> Nom: ' . $ligne->nomP . '</label></p>


    <p><label>Prenom: ' . $ligne->prenomP . '</label></p><hr>
    ';
  }
  $contenuPersonnelMD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherPourModifierInforMedecin($inforMedecin)
{

  $contenuModifLogMotMD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Afficher les bases de medecin</legend>';
  foreach ($inforMedecin as $ligne) {
    $contenuModifLogMotMD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>
    <p><input type="checkbox" name="choixloginMD" onclick="affichernewligneloginM(\'newligneloginM\')"><label>Login: ' . $ligne->login . '</label>
    <script type="text/javascript" >
      function affichernewligneloginM(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier login: <input type="text" name="modifierloginM" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validerloginMD" value="Valider"></p> \';
      }
      </script>
      <p id="newligneloginM"></p>
    </p> 


    <p><input type="checkbox" name="choixmdpMD" onclick="affichernewlignemdpM(\'newlignemdpM\')"><label> Mot  de passe: ' . $ligne->mdp . '</label>
    <script type="text/javascript" >
      function affichernewlignemdpM(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifierloginM" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validermdpMD" value="Valider"></p> \';
      }
      </script>
      <p id="newlignemdpM"></p>
    </p>


    <p><input type="checkbox" name="choixNomMD" onclick="affichernewlignenomM(\'newlignenomMD\')"><label> Nom: ' . $ligne->nomP . '</label>
    <script type="text/javascript" >
      function affichernewlignenomM(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifiernomMD" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernomMD" value="Valider"></p> \';
      }
      </script>
      <p id="newlignenomMD"></p>
    </p>


    <p><input type="checkbox" name="choixPrenomMD" onclick="affichernewligneprenomM(\'newligneprenomMD\')"><label>Prenom: ' . $ligne->prenomP . '</label>
    <script type="text/javascript" >
      function affichernewligneprenomM(n) { 
        document.getElementById(n).innerHTML += \'<p>Modifier mot de passe: <input type="text" name="modifiernomMD" value=""></p>\';
        document.getElementById(n).innerHTML += \'<p> <input type="submit" name="validernomMD" value="Valider"></p> \';
      }
      </script>
      <p id="newligneprenomMD"></p>
    </p><hr>
    ';
  }
  $contenuModifLogMotMD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}
