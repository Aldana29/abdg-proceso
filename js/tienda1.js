filterSelection("todos")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filtro");
  if (c == "todos") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "mostrar");
    if (x[i].className.indexOf(c) > -1) Agregar(x[i], "mostrar");
  }
}

function Agregar(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("botonera-galeria");
var btns = btnContainer.getElementsByClassName("boton");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active", "");
    this.className += " active";
  });
}