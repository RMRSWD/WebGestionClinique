function saisirPaysEtranger(n) {
   document.getElementById(n).innerHTML += '<p><input type="text" name="PaysEtranger" value=""></p>';
  //  document.getElementById(n).innerHTML += '<p><input type="button" name="validerNomPays "value="Valider" /></p>';

}

// function NbPiece(n) {
//   ch="";
//   for(i=0;i<document.forms["form6"].elements["nbPiece"].value;i++){
//     ch = ch+ '<p><label>Piece'+i+': </label><input type="text" name="nompiece'+i+'" id=""></p>'
//   }
//   document.getElementById(n).innerHTML = ch;

// }


// function ValideSelectBox(obj){


//   var options = obj.children; 

  
//   var html = '';

  
//   for(var i = 0; i < options.length; i++){
//     if(options[i].selected){
//       html += ' <li>'+options[i].value+ '</li> ';

//     }

//   }
//   document.getElementById("resultPiece").innerHTML = html;

// }


function nbPiece() {
  ch = "";
  // var nbPiece_Array =[];
  for (i = 0; i < document.forms["form6"].elements["z1"].value; i++) {
    ch = ch + '  <p>Piece '+Number(i+1)+': <input type="text" name="nomPieceFournit[]" id=""></p>';
    // nbPiece_Array.push(document.forms["form6".elements["nomPieceFournit"].value]);
  }
  document.getElementById("f2").innerHTML = ch;
}

// function CreerChampBloquer(){
function CreerChampBloquer(){
  champBloquer = "";
  var nbChamp = document.forms["form3"].elements["nbCreneaux"].value;
  // var nbChamp = document.getElementById("nbCreaneaux").value;
  if( nbChamp < 10){
    for(i=0 ; i<nbChamp;i++){
      champBloquer = champBloquer + '<p>Créneau'+Number(i+1)+' <input type="datetime-local" name="ChampBloqueLesCreneaux[]"></p>';
    }
    document.getElementById("nouveauChampBloquerCreneau").innerHTML = champBloquer;
    document.getElementById("champValideBloqueCreneau").innerHTML = '<p><input type="submit" name="validerBloquerCreneau" value="Bloquer"></p>'
  }
  else{
    alert("votre chiffre doit être inférieur 10. Veuillez re-saisir.");
  }
}




