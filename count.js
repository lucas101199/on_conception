
//premier compteur jusqu a 127
var n = 127; // Nombre final du compteur
var cpt = 0; // Initialisation du compteur
var duree = 5; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * 1000) / n);
var node =  document.getElementById("compteur1");

function countdown() {
    node.innerHTML = ++cpt;
    if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
       setTimeout(countdown, delta);
    }
  }
   
  setTimeout(countdown, delta);

//deuxieme compteur jusqu a 10'000
var n1 = 10000; // Nombre final du compteur
var cpt1 = 0; // Initialisation du compteur
var duree1 = 2;
var delta1 = Math.ceil((duree1 * 1000) / n1);
var node1 =  document.getElementById("compteur2");

function countdown1() {
   var nombre = ++cpt1*10;
    node1.innerHTML = nombre.toLocaleString("de-CH");
    if( cpt1*10 < n1 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
       setTimeout(countdown1);
    }
  }
   
  setTimeout(countdown1);

//troisieme compteur jusqu a 22
var n3 = 22; // Nombre final du compteur
var cpt3 = 0; // Initialisation du compteur

var delta3 = Math.ceil((duree * 1000) / n3);
var node3 =  document.getElementById("compteur3");

function countdown3() {
    node3.innerHTML = ++cpt3;
    if( cpt3 < n3 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
       setTimeout(countdown3, delta3);
    }
  }
   
  setTimeout(countdown3, delta3);

//quatrieme compteur jusqu a 16'816
var n4 = 16816; // Nombre final du compteur
var cpt4 = 0; // Initialisation du compteur
var duree4 = 1;
var delta4 = Math.ceil((duree4 * 1000) / n4);
var node4 =  document.getElementById("compteur4");

function countdown4() {
   var nombre = ++cpt4*16;
    node4.innerHTML = nombre.toLocaleString("de-CH");
    if( cpt4*16.816 < n4 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
       setTimeout(countdown4);
    }
  }
   
  setTimeout(countdown4);

//cinquieme jusqu a 9
var n5 = 9; // Nombre final du compteur
var cpt5 = 0; // Initialisation du compteur

var delta5 = Math.ceil((duree * 1000) / n5);
var node5 =  document.getElementById("compteur5");

function countdown5() {
    node5.innerHTML = ++cpt5;
    if( cpt5 < n5 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
       setTimeout(countdown5, delta5);
    }
  }
   
  setTimeout(countdown5, delta5);