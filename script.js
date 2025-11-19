// Hamburger menu

var burgerMenu = document.getElementById('burger-menu');
var overlay = document.getElementById('menu');

burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    overlay.classList.toggle("overlay");
});


// Change backround color - Switch
let moon = document.getElementById('moon');
let pumpkin = document.getElementById('pumpkin');
let tree = document.getElementById('tree');


// switch.addEventListener('click', function() {
//     if (moon = body)
// });
