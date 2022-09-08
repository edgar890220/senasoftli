let cards = ['<img src="../imagenes/varitaMcA1.png"></img>',
            '<img src="../imagenes/varitaMcA2.png"></img>',
            '<img src="../imagenes/varitaMcA3.png"></img>',
            '<img src="../imagenes/varitaMcA4.png"></img>',
            '<img src="../imagenes/harryB1.png"></img>',
            '<img src="../imagenes/harryB2.png"></img>',
            '<img src="../imagenes/harryB3.png"></img>',
            '<img src="../imagenes/harryB4.png"></img>',
            '<img src="../imagenes/herC1.png"></img>',
            '<img src="../imagenes/herC2.png"></img>',
            '<img src="../imagenes/herC3.png"></img>',
            '<img src="../imagenes/herC4.png"></img>',
            '<img src="../imagenes/ronD1.png"></img>',
            '<img src="../imagenes/ronD2.png"></img>',
            '<img src="../imagenes/ronD3.png"></img>',
            '<img src="../imagenes/ronD4.png"></img>',
            '<img src="../imagenes/snepE1.png"></img>',
            '<img src="../imagenes/snepE2.png"></img>',
            '<img src="../imagenes/snepE3.png"></img>',
            '<img src="../imagenes/snepE4..png"></img>',
            '<img src="../imagenes/tomF1.png"></img>',
            '<img src="../imagenes/tomF2.png"></img>',
            '<img src="../imagenes/tomF3.png"></img>',
            '<img src="../imagenes/tomF4.png"></img>',
            '<img src="../imagenes/siriusgG1.png"></img>',
            '<img src="../imagenes/siriusgG2.png"></img>',
            '<img src="../imagenes/siriusgG3.png"></img>',
            '<img src="../imagenes/siriusgG4.png"></img>',
            '<img src="../imagenes/luciusH1.png"></img>',
            '<img src="../imagenes/luciusH2.png"></img>',
            '<img src="../imagenes/luciusH3.png"></img>',
            '<img src="../imagenes/luciusH4.png"></img>',
        ];

let numero = ['Puntos:5', 'Puntos:10', 'Puntos:15', 'Puntos:20', 'Puntos:25', 'Puntos:30', 'Puntos:35', 'Puntos:40', 'Puntos:45', 'Puntos:50', 'Puntos:55', 'Puntos:60', 'Puntos:65','Puntos:70', 'Puntos:75', 'Puntos:80', 'Puntos:85', 'Puntos:90', 'Puntos:95', 'Puntos:100'];

let elemento = ['Poder:Tierra', 'Poder:Aire', 'Poder:Fuego', 'Poder:Agua'];

function displayCard() {
  let singleCard = cards[Math.floor(Math.random() * cards.length)];
  let showCard = `${singleCard}`;
  document.getElementById("showing").innerHTML = showCard;
  let singleNumero = numero[Math.floor(Math.random() * numero.length)];
  let showNumero = `${singleNumero}`;
  document.getElementById("numero").innerHTML = showNumero;
  document.getElementById("numero").style.background = '#000000	';
  document.getElementById("numero").style.color = '#FFFFFF';
  let singleElemento = elemento[Math.floor(Math.random() * elemento.length)];
  let showElemento = `${singleElemento} `;
  document.getElementById("elemento").style.background = '#000000';
  document.getElementById("elemento").innerHTML = showElemento;
  document.getElementById("elemento").style.color = '#FFFFFF';

  }

