// const myImgs = document.querySelectorAll('.herramienta');

// observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     if (entry.intersectionRatio > 0) {
//       console.log('in the view');
//     } else {
//       console.log('out of view');
//     }
//   });
// });

// myImgs.forEach(image => {
//   observer.observe(image);
// });

const images = document.querySelectorAll('.porcentaje-herramienta');

observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('porcentaje');
    } else {
      entry.target.classList.remove('porcentaje');
    }
  });
});

images.forEach(image => {
  observer.observe(image);
});