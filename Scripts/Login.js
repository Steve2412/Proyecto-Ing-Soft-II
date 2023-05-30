console.log("Soymegagay");

var Entrada_Cedula = document.querySelector("#Cedula");
var Entrada_Contraseña = document.querySelector("#Contraseña");
var Boton_Iniciar = document.querySelector(".Boton-Iniciar");
var Contador_Sesion = 3;

function Iniciar_Sesion() {
  if (Entrada_Cedula.value == null || Entrada_Cedula.value === "") {
    alert("Ingrese Cedula");
  } else if (
    Entrada_Contraseña.value == null ||
    Entrada_Contraseña.value === ""
  ) {
    alert("Ingrese Contraseña");
  } else if (Entrada_Cedula.value !== "Sexo" && Entrada_Contraseña !== "Sexo") {
    if (Contador_Sesion === 0) {
      alert("No podes entrar");
    } else {
      Contador_Sesion = Contador_Sesion - 1;
      alert("Tienes " + Contador_Sesion + " intentos");
    }
  } else {
    alert("Iniciar sesion");
  }
}
