let cards = [{src:"../imagenes/carta1.png"}, 'fuego', 'tierra', 'agua'];



function displayCard() {
let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("showing").style.background = '#0accff';
  document.getElementById("showing").innerHTML = showCard;
}



