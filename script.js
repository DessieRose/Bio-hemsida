// Hamburger menu

var burgerMenu = document.getElementById('burger-menu');
var overlay = document.getElementById('menu');

burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    overlay.classList.toggle("overlay");
});


// Change backround color - Switch
document.addEventListener("DOMContentLoaded", () => {
  const mobileBreakepoint = 768; // px — adjust to your mobile breakpoint
  const body = document.body;

  // The three theme radio buttons
  const moon = document.getElementById('moon');
  const pumpkin = document.getElementById('pumpkin');
  const tree = document.getElementById('tree');

   // Function: apply background ONLY in mobile view
   function applyTheme(theme) {
    if (window.innerWidth > mobileBreakepoint) {
      body.style.background = ""; // reset for desktop
      return;
    }

    switch (theme) {
      case "moon":
        body.style.background = '#1F2536'; // dark blue / night
        break;

      case "pumpkin":
        body.style.background = '#FF9D00'; // orange
        break;

      case "tree":
        body.style.background = '#374A04'; // dark green
        break;
    }
   }


   // Attach listeners
   moon.addEventListener('change', () => applyTheme('moon'));
   pumpkin.addEventListener('change', () => applyTheme('pumpkin'));
   tree.addEventListener('change', () => applyTheme('tree'));

   // Also re-apply theme if user rotates device or resizes
   window.addEventListener("resize", () => {
    const selected = document.querySelector('input[name="theme"]:checked');
    if (selected) applyTheme(selected.id); 
   });

   // Apply initial state
   applyTheme(document.querySelector('input[name="theme"]:checked').id);
});


// Movie seats starts
const theatre = document.querySelector('.theatre');
const seats = document.querySelectorAll('.row .seat:not(.occupiedseat)');
const count = document.getElementById('count');


//total antal platser + local storage. OK?
function updateSelectedSeatCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selectedseat');

        const seatsIndex = [...selectedSeats].map(seat => {
            return [...seats].indexOf(seat);
        });

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

    const text = document.querySelector('.text');
    text.innerHTML = `You have selected ${selectedSeats.length} seats.`;

}
//sparade platser
function populateUI() {
    const storedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if(storedSeats !== null && storedSeats.length > 0) {
        seats.forEach((seat, index) => {
            if(storedSeats.indexOf(index) > -1) {
                seat.classList.add('selectedseat');
            }
        });
    }
}
//klickhantering-- funkar nu???
theatre.addEventListener('click', (e) => {
    if (e.target.classList.contains('seat') && 
    !e.target.classList.contains('occupiedseat')
    ){
        e.target.classList.toggle('selectedseat');
    }
    updateSelectedSeatCount()
});

populateUI();
updateSelectedSeatCount();


// Book tickets
const buttons = document.querySelectorAll('.booking-date');

buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    });
});