<?php

$nom = 'test';
$prenom = 'test';
//if (strlen(session_id()) < 1) session_start();
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
  alert("un nouveau compte est bien créé");
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
  alert("Un motif de rendez-vous est bien créé et enregistré");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherModifMotifSucess()
{
  $afficherModifierMotifSucess = '<script>
  alert("Votre modification motif rdv est bien enregistrée");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherSupprimerMotifSucess()
{
  $afficherSupprimerMotifSucess = '<script>
  alert("Votre demande de supprimer un motif rendez-vous est bien effectué ");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherCreerNomPrenomSpecialiteMedecinSucces()
{
  $afficherCreerNomPrenomSpecialiteSucess = '<script>
  alert("Votre demande de créer un nom, prénom et spécialité de médecin est bien effectué ");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}
function afficherSupprimerMedecinSucces()
{
  $afficherCreerNomPrenomSpecialiteSucess = '<script>
  alert("Votre demande de supprimer un médecin est bien effectué ");
  </script>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

function afficherInforAgent($inforAgent)
{
  $contenuPersonnelAD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Tous Les Agents</legend>';
  if (!empty($inforAgent)) {


    foreach ($inforAgent as $ligne) {
      $contenuPersonnelAD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>

    <p><label>Login: ' . $ligne->login . '</label> </p> 


    <p><label> Mot  de passe: ' . $ligne->mdp . '</label></p>


    <p<label> Nom: ' . $ligne->nomP . '</label></p>


    <p><label>Prenom: ' . $ligne->prenomP . '</label>
    </p><hr>
    ';
    }
  } else {
    $contenuPersonnelAD .= '<script>
  alert("Aucune personne pour afficher ");
  </script>';
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
  if (!empty($inforMedecin)) {
    foreach ($inforMedecin as $ligne) {
      $contenuPersonnelMD .= '<p><label for="">ID: </label>' . $ligne->id . '</p>
    <p><label>Login: ' . $ligne->login . '</label></p> 


    <p><label> Mot  de passe: ' . $ligne->mdp . '</label></p>


    <p><label> Nom: ' . $ligne->nomP . '</label></p>


    <p><label>Prenom: ' . $ligne->prenomP . '</label></p><hr>
    ';
    }
  } else {
    $contenuPersonnelMD .= '<script>
  alert("Aucune personne pour afficher ");
  </script>';
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

function afficherPourModifierInforDirecteur($inforDirecteur)
{
  $contenuModifLogMotD = '<form action="site.php" method= "POST"> 
  <fieldset> <legend>Afficher les bases de directeur</legend>';
  foreach ($inforDirecteur as $ligne) {
    $contenuModifLogMotD .= '<table border="1" align="center" cellspacing="0"cellpadding="0" with="850px">
    <tr>
    <td colspan="2"><h2>Modifier Information Directeur</h2></td>
    </tr>
    <tr>
    <td>ID </td>
    <td> <input type="text" name="idDirecteur" readonly="readonly" value="' . $ligne->id . '"> </td>
    </tr>
    <tr>
    <td>Login </td>
    <td> <input type="text" name="loginDirecteur" value="' . $ligne->login . '"> </td>
    </tr>
    <td>Mot de passe </td>
    <td> <input type="text" name="mdpDirecteur"  value="' . $ligne->mdp . '"> </td>
    </tr>
    <tr>
    <td>Nom </td>
    <td> <input type="text" name="nomDirecteur"  value="' . $ligne->nomP . '"> </td>
    </tr>
    <td>Prénom </td>
    <td> <input type="text" name="prenomDirecteur"  value="' . $ligne->prenomP . '"> </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="modifierDirecteur" value="Enregistrer">
    </td>
    </tr>
    </table>
    ';
  }
  $contenuModifLogMotD .= '</fieldset></form>';
  require_once('vue/gabarit/gabaritDirecteur.php');
}

// function afficherTousLesPieces($piece)
// {
//   $afficherTousLesPieces = '<form method="POST" action="site.php"> 
//   <fieldset> <legend> Tous les pièces</legend>
//   ';
//   // foreach ($piece as $ligne) {
//   //   $afficherTousLesPieces .= '<p>
//   //   <input type="checkbox" name="checkbox_piece" value="' . $ligne->LibellePi . '"><label>' . $ligne->LibellePi . '</label>

//   // </p>';
//   // }
//   $afficherTousLesPieces .= '<p>
//   <select name="choisirLesPieces[]" multiple onchange="ValideSelectBox(this)">
//   ';
//   foreach ($piece as $ligne) {
//     $afficherTousLesPieces .= '
//   <option value="' . $ligne->LibellePi . '">' . $ligne->LibellePi . '</option>
//   ';
//   }

//   $afficherTousLesPieces .= '</select></p>

//   <p>Vous avez selectioné:</p>

//   <div id="resultPiece"></div>

//   ';

//   $afficherTousLesPieces .= '</fieldset></form>
//   ';
//   require_once('vue/gabarit/gabaritDirecteur.php');
// }

function afficherModifierMotif($idMotif)
{
  if (empty($idMotif)) {
    $afficherModifierMotif = '
    <script>
    alert("Pas de trouver Id motif correspondant");
    </script>
    ';
  } else {
    $afficherModifierMotif = '<form action="site.php" method="POST"> 
  <fieldset>
  <legend>Afficher les information d\'un motif de rendez-vous</legend>
  <h2>Modifier Information Motif</h2>

  <p>
  <label>ID:</label>
   <input type="text" name="idMotif" readonly="readonly" value="' . $idMotif[0]->Id_Motif . '"> 
   </p>
  
  <p>
  <label>Libelle Motif </label>
  <input type="text" name="libelleMotif" value="' . $idMotif[0]->LibelleMo . '">
  </p>
  <p>
  <label>Prix Motif </label>
   <input type="text" name="prixMotif"  value="' . $idMotif[0]->PrixMo . '"> 
  </p>
  ';

    foreach ($idMotif as $ligne) {
      $afficherModifierMotif .= ' 

    <p>
      <label>Nom Piece</label>
      <input type="hidden" name="idPieceModifD[]" value="' . $ligne->Id_Piece . '">
      <input type="text" name="nomPieceModifD[]" value="' . $ligne->LibellePi . '">
      </p>
    
    
    
    
  ';
      // }
      // foreach ($nomPiece as $ligne1) {
      //   $afficherModifierMotif .= '
      //   <p>
      //   <label>Nom Piece</label>
      //   <input type="text" name="nomPieceModifD" value="' . $ligne1->LibellePi . '">
      //   </p>
      //   <p>

      // <input type="submit" name="modifierMotifD" value="Enregistrer">

      // </p>
      //   ';
      // }
      // foreach ($nomPiece as $ligne1) {
      //   $afficherModifierMotif .= '
      // <tr>
      // <td>Nom Piece </td>
      // <td> <input type="text" name="nomPiece"  value="' . $ligne1->LibellePi . '"> </td>
      // </tr>
      // <tr>
      // <td colspan="2" align="center">
      // <input type="submit" name="modifierMotifD" value="Enregistrer">
      // </td>
      // </tr>
      // </table>
      //   ';
      // }
    }

    $afficherModifierMotif .= '
    <p>
    
    <input type="submit" name="modifierMotifD" value="Enregistrer">
    
    </p>
    </fieldset></form>';

    require_once('vue/gabarit/gabaritDirecteur.php');
  }
}


// function afficherModifierPieceInFormMotif($nomPiece)
// {
//   $afficherModifierPieceMotif = '<form action="site.php" method="POST"> 
//   <fieldset>
//   <legend>Afficher les Piece d\'un motif de rendez-vous</legend>';

//   foreach ($nomPiece as $ligne) {
//     $afficherModifierPieceMotif .= '<table border="1" align="center" cellspacing="0"cellpadding="0" with="850px">
//     <tr>
//     <td colspan="2"><h2>Modifier Information Piece</h2></td>
//     </tr>
//     <tr>
//     <td>ID </td>
//     <td> <input type="text" name="idPiece" readonly="readonly" value="' . $ligne->Id_Piece . '"> </td>
//     </tr>
//     <tr>
//     <td>Libelle Motif </td>
//     <td> <input type="text" name="libellePiece" value="' . $ligne->LibellePi . '"> </td>
//     </tr>
//     <tr>
//     <td colspan="2" align="center">
//     <input type="submit" name="modifierPiece" value="Enregistrer">
//     </td>
//     </tr>
//     </table>
    
//   ';
//   }


//   $afficherModifierPieceMotif .= '</fieldset></form>';

//   require_once('vue/gabarit/gabaritDirecteur.php');
// }
