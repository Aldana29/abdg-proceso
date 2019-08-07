//  var x = new XMLHttpRequest();

//  // readystatechange
//  x.addEventListener(
//      "readystatechange",
//      () => {
//          if (
//              x.status === 200
//              &&
//              x.readyState === 4
//          ) {
//              var respuesta = JSON.parse(x.response);
//              console.log(respuesta);

            
//               var behanceContainer2 = respuesta.projects[6].name;
//               behanceContainer.innerHTML = behanceContainer2;

//               var fotito = respuesta.projects[6].covers[404];


//             //   i=0 es desde donde inicia
//               for (let i =0; i < respuesta.projects.length; i++) {
//                   console.log(respuesta.projects[i].name)


//                  // ACA IMPRIMIR COMO HACIAMOS CON LAS COSAS QUE ESTAN ABAJO-> CREATE ELEMENT

//               }
//               foto.innerHTML = `<img src="${fotito}" alt="">`;

//               var linkTp = respuesta.projects[6].url;
//               link.innerHTML = `<a href="${linkTp}">Ver trabajo </a>`;



//         }
//      }
//  );

//  x.open("GET", "https://blooming-fortress-75644.herokuapp.com", true);
//  x.send();


// ----------------------------------ORIGINAL


 var x = new XMLHttpRequest();

 // readystatechange
 x.addEventListener(
     "readystatechange",
     () => {
         if (
             x.status === 200
             &&
             x.readyState === 4
         ) {
             var respuesta = JSON.parse(x.response);
             console.log(respuesta);

            

             for (let i =0; i < respuesta.projects.length; i++) {
                console.log(respuesta.projects[i].name);}
    
              var behanceContainer2 = respuesta.projects[5].name;
              behanceContainer.innerHTML = behanceContainer2;

            //   var fotito = respuesta.projects[6].covers[404];


             //   i=0 es desde donde inicia


            //  var ultimos = respuesta.projects[i].name.slice(respuesta.projects[i].name.length-3);
            //  console.log(ultimos);


            //      // ACA IMPRIMIR COMO HACIAMOS CON LAS COSAS QUE ESTAN ABAJO-> CREATE ELEMENT

            //   }
            //   foto.innerHTML = `<img src="${fotito}" alt="">`;

            //   var linkTp = respuesta.projects[6].url;
            //   link.innerHTML = `<a href="${linkTp}">Ver trabajo </a>`;



        }
 });

 x.open("GET", "https://blooming-fortress-75644.herokuapp.com", true);
 x.send();
