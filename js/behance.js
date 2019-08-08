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

                // console.log(projects[i].name);

                // console.log(projects[i].url);

                // console.log(projects[i].covers[230]);

                var nombre = projects[0].name;
                trabajo1titulo.innerHTML = nombre;

                var nombre2 = projects[1].name;
                trabajo2titulo.innerHTML = nombre2;

                var nombre3 = projects[2].name;
                trabajo3titulo.innerHTML = nombre3;



                var foto = projects[0].covers[230];
                trabajo1foto.innerHTML = `<img src= "${foto}" alt="">`;

                var foto2 = projects[1].covers[230];
                trabajo2foto.innerHTML =`<img src= "${foto2}" alt="">`;

                var foto3 = projects[2].covers[230];
                trabajo3foto.innerHTML = `<img src= "${foto3}" alt="">`;



                var link = projects[0].url;
                trabajo1link.innerHTML =  `<a href="${link}">Ver trabajo </a>`;

                var link2 = projects[1].url;
                trabajo2link.innerHTML =  `<a href="${link2}">Ver trabajo </a>`;

                var link3 = projects[2].url;
                trabajo3link.innerHTML =  `<a href="${link3}">Ver trabajo </a>`;


                

     



                //var behanceContainer2 = respuesta.projects[6].name;
                //               behanceContainer.innerHTML = behanceContainer2;
                
            }
        }

    
    });

x.open("GET", "https://blooming-fortress-75644.herokuapp.com", true);
x.send();