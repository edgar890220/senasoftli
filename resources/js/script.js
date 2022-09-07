let cards = ['AIRE'];
let numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];


function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("cardshowing").style.background = '#0accff';
  document.getElementById("A1").innerHTML = showCard;
}
