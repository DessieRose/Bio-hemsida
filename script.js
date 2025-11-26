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
