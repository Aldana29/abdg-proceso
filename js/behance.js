
var x = new XMLHttpRequest();

// readystatechange -> espera a que haya algun cambio en la solicitud
x.addEventListener(
    "readystatechange",
    () => {
        if (x.status === 200 && x.readyState === 4) {

            
            var respuesta = JSON.parse(x.response);




            
        }
    }
);

x.open("GET","https://www.behance.net/v2/collections/172560673/projects?api_key=Zb0XWEqAvBua4lmCbfb6derptH2tp4cc", true);

x.send();