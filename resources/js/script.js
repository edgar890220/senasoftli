let imagenes = ['../imagenes/carta1.png', 'fuego', 'tierra', 'agua'];
let numbers = ['5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60', '65'];


function displayCard() {
  let singleCard = imagenes[Math.floor(Math.random() * imagenes.length)];
  let showImagenes = `${singleimagenes}`;
  document.getElementById("showing").style.background = '#0accff';
  document.getElementById("showing").innerHTML = showImagenes;
}



