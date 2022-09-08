let cards = ['<img src="../imagenes/varitaMcA1.png"></img>',
            '<img src="../imagenes/varitaMcA2.png"></img>',
            '<img src="../imagenes/varitaMcA3.png"></img>',
            '<img src="../imagenes/varitaMcA4.png"></img>'];

function displayCard() {
  for(let i=0; i<cards.length;i++){
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("showing").innerHTML = showCard;
  }
}
