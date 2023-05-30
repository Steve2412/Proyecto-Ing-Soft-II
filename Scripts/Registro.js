var validRegex =
  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

var Insertar_Nombre = document.querySelector("#Nombre");
var Insertar_Apellido = document.querySelector("#Apellido");
var Insertar_Correo = document.querySelector("#Correo");
var Insertar_Cedula = document.querySelector("#Cedula");

var Insertar_Direccion = document.querySelector("#Direccion");
var Insertar_Telefono = document.querySelector("#Telefono");
var Insertar_Contra_1 = document.querySelector("#Contra_1");
var Insertar_Contra_2 = document.querySelector("#Contra_2");
var Insertar_Fecha = document.querySelector(".Fecha-Insertar");

var Fecha_Actual = new Date();
var Mes_Actual = new Date().getMonth();
var Dia_Actual = Fecha_Actual.getDate;
console.log(Fecha_Actual, Mes_Actual.value, Dia_Actual.value);

var el_first = document.querySelector(".Entrada-Datos-1");
var el_second = document.querySelector(".Entrada-Datos-2");
var boton_siguiente = document.querySelector(".Boton-Siguiente");
var boton_regresar = document.querySelector(".Boton-Regresar");
var boton_registrarse = document.querySelector(".Boton-Registrarse");

function fun_siguiente() {
  if (
    Insertar_Nombre.value == null ||
    Insertar_Nombre.value === "" ||
    Insertar_Apellido.value == null ||
    Insertar_Apellido.value === "" ||
    Insertar_Correo.value == null ||
    Insertar_Correo.value === "" ||
    Insertar_Cedula.value == null ||
    Insertar_Cedula.value === ""
  ) {
    alert("Falta campos por rellenar");
  } else if (!Insertar_Correo.value.match(validRegex)) {
    alert("Invalid email address!");
  } else {
    alert("Siguiente fase");
    el_first.style.display = "none";
    el_second.style.display = "block";
    boton_siguiente.style.display = "none";
    boton_registrarse.style.display = "block";
    boton_regresar.style.display = "block";
  }
}

function registrar() {
  var Año_Nacimiento = parseInt(String(Insertar_Fecha.value).substring(0, 4));
  var Mes_Nacimiento = parseInt(String(Insertar_Fecha.value).substring(5, 7));
  var Dia_Nacimiento = parseInt(String(Insertar_Fecha.value).substring(8, 10));
  if (
    Insertar_Direccion.value == null ||
    Insertar_Direccion.value === "" ||
    Insertar_Telefono.value == null ||
    Insertar_Telefono.value === "" ||
    Insertar_Contra_1.value == null ||
    Insertar_Contra_1.value === "" ||
    Insertar_Contra_2.value == null ||
    Insertar_Contra_2.value === "" ||
    Insertar_Fecha.value == null ||
    Insertar_Fecha.value === ""
  )
    alert("Faltan campos por rellenar");
  else if (Insertar_Telefono.value.search == /[A-Z]/) {
    alert("No se puede insertar letras");
  } else if (Insertar_Contra_1.value.length < 8) {
    alert("Contraseña menor a 8 caracteres");
  } else if (Insertar_Contra_1.value.length > 16) {
    alert("Contraseña mayor a 16 caracteres");
  } else if (Insertar_Contra_1.value.search(/[a-z]/) < 0) {
    alert("Debe Incluir una letra minuscula");
  } else if (Insertar_Contra_1.value.search(/[A-Z]/) < 0) {
    alert("Debe Incluir una letra Mayuscula");
  } else if (Insertar_Contra_1.value.search(/[0-9]/) < 0) {
    alert("Debe Incluir una Numero");
  } else if (Insertar_Contra_1.value !== Insertar_Contra_2.value) {
    alert("Las contraseñas no concuerdan");
  } else if (Año_Nacimiento > 2005 || Año_Nacimiento < 1925) {
    alert("No cumples la edad requerida");
  } else {
    alert("Ingresaste seccion");
  }
}

function fun_atras() {
  el_first.style.display = "block";
  el_second.style.display = "none";
  boton_siguiente.style.display = "block";
  boton_registrarse.style.display = "none";
  boton_regresar.style.display = "none";
}
