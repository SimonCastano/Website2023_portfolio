window.addEventListener("mousemove", function(e) {
  var circle = document.getElementById("circle");
  circle.style.left = e.pageX + "px";
  circle.style.top = e.pageY + "px";

  // Set the transition duration to be longer than the mouse movement
  circle.style.transitionDuration = "0.2s";
  circle.style.transitionTimingFunction = "ease-out";
});

document.addEventListener('keydown', function(event) {
  // Verificar si las flechas de arriba o abajo fueron presionadas
  if (event.keyCode === 38 || event.keyCode === 40) {
    event.preventDefault(); // Evitar el comportamiento predeterminado del desplazamiento

    var sections = document.querySelectorAll('section'); // Obtener todas las secciones
    var currentSectionIndex = -1;

    // Encontrar la sección actual
    for (var i = 0; i < sections.length; i++) {
      var rect = sections[i].getBoundingClientRect();

      // Verificar si la sección actual está visible en la ventana
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        currentSectionIndex = i;
        break;
      }
    }

    // Navegar a la siguiente o anterior sección
    if (event.keyCode === 38 && currentSectionIndex > 0) {
      // Flecha arriba
      sections[currentSectionIndex - 1].scrollIntoView({ behavior: 'smooth' });
    } else if (event.keyCode === 40 && currentSectionIndex < sections.length - 1) {
      // Flecha abajo
      sections[currentSectionIndex + 1].scrollIntoView({ behavior: 'smooth' });
    } else if (event.keyCode === 38 && currentSectionIndex === 0) {
      // Si estás en la primera sección y presionas flecha arriba, ve a la segunda sección
      sections[1].scrollIntoView({ behavior: 'smooth' });
    }
  }
});



var audio = document.getElementById("audioPlayer");
var toggleButton = document.getElementById("toggleButton");
var volumeRange = document.getElementById("volumeRange");

toggleButton.addEventListener("click", function() {
  if (audio.paused) {
    audio.play();
    toggleButton.innerHTML = `
    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 0V10.184C3.67977 10.0655 3.34145 10.0032 3 10C2.40666 10 1.82664 10.1759 1.33329 10.5056C0.839943 10.8352 0.455426 11.3038 0.228363 11.8519C0.00129986 12.4001 -0.0581102 13.0033 0.0576455 13.5853C0.173401 14.1672 0.459123 14.7018 0.878681 15.1213C1.29824 15.5409 1.83279 15.8266 2.41473 15.9424C2.99667 16.0581 3.59987 15.9987 4.14805 15.7716C4.69623 15.5446 5.16477 15.1601 5.49441 14.6667C5.82405 14.1734 6 13.5933 6 13V3H13V7.184C12.6798 7.06548 12.3414 7.00323 12 7C11.4067 7 10.8266 7.17595 10.3333 7.50559C9.83994 7.83524 9.45542 8.30377 9.22836 8.85195C9.0013 9.40013 8.94189 10.0033 9.05764 10.5853C9.1734 11.1672 9.45912 11.7018 9.87868 12.1213C10.2982 12.5409 10.8328 12.8266 11.4147 12.9424C11.9967 13.0581 12.5999 12.9987 13.1481 12.7716C13.6962 12.5446 14.1648 12.1601 14.4944 11.6667C14.8241 11.1734 15 10.5933 15 10V0H4Z" fill="white"/>
</svg>

    `;
    toggleButton.classList.add("active");
    toggleButton.classList.remove("inactive");
  } else {
    audio.pause();
    toggleButton.innerHTML = `
   
<svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 0V10.184C6.67977 10.0655 6.34145 10.0032 6 10C5.40666 10 4.82664 10.1759 4.33329 10.5056C3.83994 10.8352 3.45543 11.3038 3.22836 11.8519C3.0013 12.4001 2.94189 13.0033 3.05765 13.5853C3.1734 14.1672 3.45912 14.7018 3.87868 15.1213C4.29824 15.5409 4.83279 15.8266 5.41473 15.9424C5.99667 16.0581 6.59987 15.9987 7.14805 15.7716C7.69623 15.5446 8.16477 15.1601 8.49441 14.6667C8.82405 14.1734 9 13.5933 9 13V3H16V7.184C15.6798 7.06548 15.3414 7.00323 15 7C14.4067 7 13.8266 7.17595 13.3333 7.50559C12.8399 7.83524 12.4554 8.30377 12.2284 8.85195C12.0013 9.40013 11.9419 10.0033 12.0576 10.5853C12.1734 11.1672 12.4591 11.7018 12.8787 12.1213C13.2982 12.5409 13.8328 12.8266 14.4147 12.9424C14.9967 13.0581 15.5999 12.9987 16.1481 12.7716C16.6962 12.5446 17.1648 12.1601 17.4944 11.6667C17.8241 11.1734 18 10.5933 18 10V0H7Z" fill="white"/>
<line x1="0.7" y1="15.6" x2="20.7" y2="0.599999" stroke="white"/>
</svg>
`;
    toggleButton.classList.add("inactive");
    toggleButton.classList.remove("active");
  }
});

volumeRange.addEventListener("input", function() {
  audio.volume = volumeRange.value;
});

// Establecer el volumen por defecto
audio.volume = 0.1;
volumeRange.value = 0.1;

// Activar la reproducción por defecto al cargar la página
audio.play();
toggleButton.classList.add("active");

