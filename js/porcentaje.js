const images = document.querySelectorAll('.porcentaje1');


observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('porcentaje-animacion');
    }
  });
});

images.forEach(image => {
  observer.observe(image);
});


// ----------------------------------------------------------

const images2 = document.querySelectorAll('.porcentaje2');


observer2 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('porcentaje-animacion');
    }
  });
});

images2.forEach(image => {
  observer2.observe(image);
});

// ----------------------------------------------------------

const images3 = document.querySelectorAll('.porcentaje3');


observer3 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('porcentaje-animacion');
    }
  });
});

images3.forEach(image => {
  observer3.observe(image);
});

