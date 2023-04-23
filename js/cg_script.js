

function ouvertureFermetureMenu() {
  var sidebar = document.getElementById("sidebarMenu");
  sidebar.classList.toggle("ouverte");
}

function ouvertureFermetureHeure() {
  var heuresidebar = document.getElementById("section_heure");
  heuresidebar.classList.toggle("ouverte");
}


// set intervale est une fonction javascript qui permet deffectuer une action tous les x millisecondes
setInterval(function(){ 
// on creer un objet date  
var heure = new Date();
// on recupere l'element heure puis on lui ajoute l'heure avec la fonction toLocaleTimeString de l'objet date
document.getElementById("heure").innerHTML = heure.toLocaleTimeString();
}, 1000);
// si je ne met pas ca j'ai une erreur "Cannot set property 'onclick' of null" car le js s'execute avant que l'element soit créer
window.onload = function(){ 
document.getElementById("submit_btn").onclick = function(event) {
  event.preventDefault();
  var sectionCachee = document.getElementsByClassName("section_cachee");
  // ce coup ci je dois mettre [0] car getElementsByClassName retourne un tableau
  sectionCachee[0].classList.toggle("ouverte");
};

};