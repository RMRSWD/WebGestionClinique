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
  require_once('vue/gabarit/gabaritDirecteur.php');
}
function affficherModifierSucess()
{
  $afficherModifierSucess = '';
  $afficherModifierSucess .= '<script>
  alert("Votre modification est bien enregistrée");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherCreerMotifSucess()
{
  $afficherCreerMotifSucess = '<script>
  alert("Un motif est bien enregistrée");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherInforAgent($inforAgent)
{
  $contenuPersonnelAD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Tous Les Agents</legend>
  <i>Pour modifier les informations d\'un agent. Vous cliquez directement sur le champ que vous voulez modifier. Ensuite, cliquez sur le bouton "Enregistrer" pour enregistrer les informations. </i>';
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
  <fieldset> <legend>Afficher les bases d\'agent</legend>
  <i>Pour modifier les informations d\'un médecin. Vous cliquez directement sur le champ que vous voulez modifier. Ensuite, cliquez sur le bouton "Enregistrer" pour enregistrer les informations. </i>
  ';
  foreach ($informodifAgent as $ligne) {
    $contenuModifLogMotAD .= '<table border="1" align="center" cellspacing="0"cellpadding="0" with="850px">
    <tr>
    <td colspan="2"><h2>Modifier Information Agent</h2></td>
    </tr>
    <tr>
    <td>ID </td>
    <td> <input type="text" name="idAgent" readonly="readonly" value="' . $ligne->id . '"> </td>
    </tr>
    <tr>
    <td>Login </td>
    <td> <input type="text" name="loginAgent" value="' . $ligne->login . '"> </td>
    </tr>
    <td>Mot de passe </td>
    <td> <input type="text" name="mdpAgent"  value="' . $ligne->mdp . '"> </td>
    </tr>
    <tr>
    <td>Nom </td>
    <td> <input type="text" name="nomAgent"  value="' . $ligne->nomP . '"> </td>
    </tr>
    <td>Prénom </td>
    <td> <input type="text" name="prenomAgent"  value="' . $ligne->prenomP . '"> </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="modifierAgentD" value="Enregistrer">
    </td>
    </tr>
    </table>
    

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
    $contenuModifLogMotMD .= '<table border="1" align="center" cellspacing="0"cellpadding="0" with="850px">
    <tr>
    <td colspan="2"><h2>Modifier Information Medecin</h2></td>
    </tr>
    <tr>
    <td>ID </td>
    <td> <input type="text" name="idMedecin" readonly="readonly" value="' . $ligne->id . '"> </td>
    </tr>
    <tr>
    <td>Login </td>
    <td> <input type="text" name="loginMedecin" value="' . $ligne->login . '"> </td>
    </tr>
    <td>Mot de passe </td>
    <td> <input type="text" name="mdpMedecin"  value="' . $ligne->mdp . '"> </td>
    </tr>
    <tr>
    <td>Nom </td>
    <td> <input type="text" name="nomMedecin"  value="' . $ligne->nomP . '"> </td>
    </tr>
    <td>Prénom </td>
    <td> <input type="text" name="prenomMedecin"  value="' . $ligne->prenomP . '"> </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="modifierMedecinD" value="Enregistrer">
    </td>
    </tr>
    </table>
    ';
  }
  $contenuModifLogMotMD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherTousLesPieces($piece)
{
  $afficherTousLesPieces = '<form method="POST" action="site.php"> 
  <fieldset> <legend> Tous les pièces</legend>
  ';
  // foreach ($piece as $ligne) {
  //   $afficherTousLesPieces .= '<p>
  //   <input type="checkbox" name="checkbox_piece" value="' . $ligne->LibellePi . '"><label>' . $ligne->LibellePi . '</label>

  // </p>';
  // }
  $afficherTousLesPieces .= '<p>
  <select name="choisirLesPieces[]" multiple onchange="ValideSelectBox(this)">
  ';
  foreach ($piece as $ligne) {
    $afficherTousLesPieces .= '
  <option value="' . $ligne->LibellePi . '">' . $ligne->LibellePi . '</option>
  ';
  }

  $afficherTousLesPieces .= '</select></p>

  <p>Vous avez selectioné:</p>

  <div id="resultPiece"></div>

  ';

  $afficherTousLesPieces .= '</fieldset></form>
  ';
  require_once('vue/gabarit/gabaritDirecteur.php');
}
