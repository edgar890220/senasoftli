let cards = ['♥', '♣', '♦', '♠'];
let numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
let imagenes=new Array(
    'img/fondo.png',
    'img/play.png'
);

function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let singleNumber = numbers[Math.floor(Math.random() * numbers.length)];
  let singleImagen=imagenes[Math.floor((Math.random()*imagenes.length))];
  let showCard = `${singleNumber}   ${singleCard} `;
  document.getElementById("showing").innerHTML = showCard;
  document.getElementById("imagen").src=imagenes;

}


