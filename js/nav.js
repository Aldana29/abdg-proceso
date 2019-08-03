const hamburguer = document.querySelector(".hamburguesa");

const navLista = document.querySelector(".nav-lista");

const links = document.querySelectorAll(".nav-lista li");

hamburguer.addEventListener("click", () => {
    navLista.classList.toggle("open");
});