<<<<<<< HEAD
let elemento = ['tierra', 'aire', 'fuego', 'agua'];
let numero = ['5: fuego', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60', '65','70', '75', '80', '85', '90', '95', '100'];
let imagen = ['<img src="../imagenes/carta1.png"></img>', '<img src="../imagenes/carta2.png"></img>', 'imagenes/carta3.png', 'imagenes/carta4.png']

function displayElemento() {

  let singleElemento = elemento[Math.floor(Math.random() * elemento.length)];
  let showElemento = `${singleElemento} `;
  document.getElementById("elemento").style.background = '#0accff';
  document.getElementById("elemento").innerHTML = showElemento;
  let singleNumero = numero[Math.floor(Math.random() * numero.length)];
let showNumero = `${singleNumero}`;
document.getElementById("numero").style.background = '#0accff';
document.getElementById("numero").innerHTML = showNumero;
let singleImagen = imagen[Math.floor(Math.random() * imagen.length)];
let showImagen = `${singleImagen}`;
document.getElementById("imagen").innerHTML = showImagen;
=======
let cards = ['♥', '♣', '♦', '♠'];
let numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let singleNumber = numbers[Math.floor(Math.random() * numbers.length)];
  let singleImagen=imagenes[Math.floor((Math.random()*imagenes.length))];
  let showCard = `${singleNumber}   ${singleCard} `;
  document.getElementById("showing").innerHTML = showCard;
  document.getElementById("imagen").src=imagenes;
>>>>>>> a7b2d151106a10ddc7d03431ed40dd4d212a0e3e

}



