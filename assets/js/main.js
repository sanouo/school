
function derriere() {
    document.getElementById("Id").style.display = "none";
    document.getElementById("Id1").style.display = "block";
}
function derriere1() {
    document.getElementById("Id2").style.display = "none";
    document.getElementById("Id3").style.display = "block";
}
function derriere2() {
    document.getElementById("Id4").style.display = "none";
    document.getElementById("Id5").style.display = "block";
}

function devant() {
    document.getElementById("Id").style.display = "block";
    document.getElementById("Id1").style.display = "none";
}
function devant1() {
    document.getElementById("Id2").style.display = "block";
    document.getElementById("Id3").style.display = "none";
}
function devant2() {
    document.getElementById("Id4").style.display = "block";
    document.getElementById("Id5").style.display = "none";
}




// test
var n = 15; // Nombre final du compteur
var cpt = 0; // Initialisation du compteur
var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node =  document.getElementById("compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

function countdown() {
  node.innerHTML = ++cpt;
  if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown, delta);
  }
}

setTimeout(countdown, delta);




// test2
// Produces width of .barChart
$(document).ready(function() {
  $('.graph-bar').each(function() {
     var dataWidth = $(this).data('value');
     $(this).css("width", dataWidth + "%");
  });
});

// Positioning of .bubbleChart
$(document).ready(function() {
  $('.chart-bubble').each(function() {
    // Bubble Size
    var bubbleSize = $(this).data('value');
    $(this).css("width", function() {
      return (bubbleSize * 10) + "px"
    });
    $(this).css("height", function() {
      return (bubbleSize * 10) + "px"
    });

    // Bubble Position
    var posX = $(this).data('x');
    var posY = $(this).data('y');
    $(this).css("left", function() {
      return posX - (bubbleSize * 0.5) + "%"
    });
    $(this).css("bottom", function() {
      return posY - (bubbleSize * 0.5) + "%"
    });
  });
});
