let cards = ['aire', 'fuego', 'tierra', 'agua'];
let numbers = ['5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60', '65'];


function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("showing").style.background = '#0accff';
  document.getElementById("showing").innerHTML = showCard;
}
