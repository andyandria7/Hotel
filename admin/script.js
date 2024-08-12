const btn1 = document.querySelector('#home');
const btn2 = document.querySelector('#user');
const btn3 = document.querySelector('#food');
const btn4 = document.querySelector('#room');
// const btn5 = document.querySelector('#sittings');
const btn6 = document.querySelector('#messages');

console.log(btn4);

let sections = {
  acceuil: document.querySelectorAll('#acceuil'),
  personne: document.querySelectorAll('#personne'),
  nouriture: document.querySelectorAll('#nouriture'),
  chambre: document.querySelectorAll('#chambre'),
  // parametre: document.querySelectorAll('#parametre'),
  mess: document.querySelectorAll('#mess')
}

//btn

btn1.addEventListener('click', () => display('acceuil'));
btn2.addEventListener('click', () => display('personne'));
btn3.addEventListener('click', () => display('nouriture'));
btn4.addEventListener('click', () => display('chambre'));
// btn5.addEventListener('click', () => display('parametre'));
btn6.addEventListener('click', () => display('mess'));


function display(zavatra) {
  for (let section in sections) {
      sections[section].forEach(item => {
          if (section === zavatra) {
              item.style.display = 'block';
          } else {
              item.style.display = 'none';
          }
      });
  }
}

// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");
const menuBtn = document.getElementById('menu-btn');
const darkMode = document.querySelector('.dark-mode');
const li = document.querySelector('.navigation ul li');


darkMode.addEventListener('click', () => {
  document.querySelector('.main').classList.toggle('dark');
  darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
  darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
})

if (darkMode.querySelector('span:nth-child(2)').classList.toggle('active')) {

} else {
  list.forEach((item) => item.addEventListener("click", activeDarkLink));
}

function activeDarkLink() {
  list.forEach((item) => {
    item.classList.remove("darkhover");
  });
  this.classList.add("darkhover");
}


list.forEach((item) => item.addEventListener("click", activeLink));
function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");

}


// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

// recherche
$(document).ready(function(){
  $("#tadiavina").on("keyup", function(){
      let value  = $(this).val().toUpperCase();
      $(".tr").each(function(){
          $(this).toggle($(this).text().toUpperCase().indexOf(value) > -1);
      });
  });
});