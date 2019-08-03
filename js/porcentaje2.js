function apareceScroll (){
    var html = document.getElementsByTagName("html")[0];
    var elementoPorcentaje = document.getElementsByClassName("porcentaje");

    document.addEventListener("wheel", function(){
        var topVent = html.scrollTop;
        for (i=0; i< elementoPorcentaje.length; i++) {
            var topElementPorcentaje = elementoPorcentaje[i].offsetTop;
            if (topVent < topElementPorcentaje -400) {
                elementoPorcentaje[i].style.opacity = 1;
            }
        }
    })
}

apareceScroll();

