c  = cards[i];
cards[i]=




function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("cardshowing").style.background = '#0accff';
  document.getElementById("A1").innerHTML = showCard;
}
