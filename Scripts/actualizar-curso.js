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
    console.log(datos.get("Contenido"))
    fetch("php/actualizar-curso.php", {
        method: "POST",
        body: datos,
      })
        .then(res => res.json())
        .then(data => {
          console.log(data);
          if (data === "1") {
            alert("Ya existe el curso");
          } else if (data === "2") {
            alert(
              "Curso Actualizado"
            );
            window.location.href = "../crud-admin-cursos.php";
          }})
}
