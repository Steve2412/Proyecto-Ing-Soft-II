var Insertar_Nombre = document.querySelector("#Correo");

var el_first = document.querySelector(".Entrada-Datos-1");
var el_second = document.querySelector(".Entrada-Datos-2");
var el_third = document.querySelector(".Entrada-Datos-3");
var boton_siguiente = document.querySelector(".Boton-Siguiente");
var boton_codigo = document.querySelector(".Boton-Codigo");
var boton_cambiar = document.querySelector(".Boton-Cambiar");

function fun_siguiente() {
  el_first.style.display = "none";
  el_second.style.display = "block";
  boton_siguiente.style.display = "none";
  boton_codigo.style.display = "block";
}

function fun_Codigo() {
  el_second.style.display = "none";
  el_third.style.display = "block";
  boton_codigo.style.display = "none";
  boton_cambiar.style.display = "block";
}
