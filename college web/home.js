const backgrounds = ["auca_background.png"];

let currentBackground = 0;

function changeBackground() {
  document.body.style.backgroundImage = `url(${backgrounds[currentBackground]})`;
  currentBackground = (currentBackground + 1) % backgrounds.length;
}

// Change background every 5 seconds (5000 milliseconds)
setInterval(changeBackground, 5000);

// Initial background setting
changeBackground();
