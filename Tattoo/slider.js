var slider = document.getElementById("myRange");
var output = document.getElementById("demopop");
var hauteurOutput = document.getElementById("hauteur");
var prixOutput = document.getElementById("prix");
output.innerHTML = slider.value; 
hauteur.innerHTML = hauteur.value;


slider.oninput = function() {
  output.innerHTML = this.value;
  hauteurOutput.innerHTML = this.value * 1.5; 
  prixOutput.innerHTML = this.value * 20;
  
}
