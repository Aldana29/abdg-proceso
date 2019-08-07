var x = new XMLHttpRequest();

// readystatechange
x.addEventListener(
    "readystatechange",
    () => {
        if (x.status === 200 && x.readyState === 4) {
            var respuesta = JSON.parse(x.response);
            console.log(respuesta);

            var projects = respuesta.projects;

            for (let i = 0; i < 3; i++) {
                
                // var ultimos = i -4;
                console.log(projects[i]);
            }

            // var behanceContainer2 = respuesta.projects[5].name;
            // behanceContainer.innerHTML = behanceContainer2;


        }
    });

x.open("GET", "https://blooming-fortress-75644.herokuapp.com", true);
x.send();
