var formulario = document.querySelector("#Formulario");

function regresar(){
  window.location.href = "../crud-admin-cursos.php";

}

function registrar(){
    var datos = new FormData(formulario);
    console.log(datos.get("ID"));
    console.log(datos.get("Nombre"));
    console.log(datos.get("Horas"));
    console.log(datos.get("Precio"));
    console.log(datos.get("Cupo_min"));
    console.log(datos.get("Cupo_max"));
    console.log(datos.get("Video"));
    console.log(datos.get("Descripcion"));
    console.log(datos.get("Tema1T"));
    console.log(datos.get("Tema1C"));
    console.log(datos.get("Tema2T"));
    console.log(datos.get("Tema2C"));
    console.log(datos.get("Tema3T"));
    console.log(datos.get("Tema3C"));
    console.log(datos.get("Tema4T"));
    console.log(datos.get("Tema4C"));
    fetch("php/registrar-curso.php", {
        method: "POST",
        body: datos,
      })
        .then(res => res.json())
        .then(data => {
          console.log(data);
          if (data === "1") {
            alert("Ya existe el usuario");
          } else if (data === "2") {
            alert(
              "Te has registrado correctamente en el sistema, procede a iniciar sesion"
            );
            window.location.href = "../crud-admin-cursos.php";
          }})
}
