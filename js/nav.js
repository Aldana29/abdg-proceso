const hamburguer = document.querySelector(".hamburguesa");

const navLista = document.querySelector(".nav-lista");

const links = document.querySelectorAll(".nav-lista li");

hamburguer.addEventListener("click", () => {
    navLista.classList.toggle("open");
});

let botones = document.querySelectorAll('.nav-lista a');

for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener("click", () => {
        navLista.classList.toggle("open");
    });
}