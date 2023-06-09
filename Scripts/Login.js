console.log("Soymegagay");

var formulario = document.querySelector(".Formulario");

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
  } else {
    //alert("Iniciar sesion");
    var datos = new FormData(formulario);
    console.log(datos.get("Cedula"));
    console.log(datos.get("Contra"));
    fetch("php/login.php", {
      method: "POST",
      body: datos,
    })
    .then(res => res.json())
    .then(data => {
        if (data == "2" ||data == "3")   {
          alert("No coinciden los datos");
        } else if (data == "1") {
          alert("Procede a iniciar sesion");
          window.location.href = "prueba.html";
        }
        console.log(data);
      });
  }
}

/*} else if (Entrada_Cedula.value !== "Sexo" && Entrada_Contraseña !== "Sexo") {
  if (Contador_Sesion === 0) {
    alert("No podes entrar");
  } else {
    Contador_Sesion = Contador_Sesion - 1;
    alert("Tienes " + Contador_Sesion + " intentos");
  }*/
