function tervehdi() {
  alert("Terve! Kiitos vierailusta portfoliooni.");
}
const otsikko = document.getElementById("otsikko");

const variLista = ["red", "blue", "green", "purple", "orange", "teal"];
let indeksi = 0;

setInterval(() => {
  otsikko.style.color = variLista[indeksi];
  indeksi = (indeksi + 1) % variLista.length;
}, 3000);
