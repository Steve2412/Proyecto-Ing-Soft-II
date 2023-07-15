<?php
require "php/conexion.php";
session_start();
if(!isset($_SESSION['usuario'])){
  echo '<script language="javascript">
  window.location = "index.html"
  </script>';
  die();
  session_destroy(); 
}

$usuario = $_SESSION['usuario'];
$query = "SELECT * FROM usuario WHERE cedu_user = $usuario"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Nombre = $row['nomb_user'];
    $Apellido = $row['apelli_user'];
    $Correo = $row['correo_user'];
    $Genero = $row['sexo_user'];
    $Direccion = $row['dirre_user'];
    $Numero = $row['numer_user'];
    $Contra = $row['contra_user'];
    $Fecha = $row['fech_naci_user'];
    $Estado = $row['estado_user'];
   }

$query = "SELECT * FROM usuario_has_cursos WHERE Usuario_ID_user = $usuario"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Cursos_ID_cur = $row['Cursos_ID_cur'];
    $Rol_usuario = $row['Usuario_rol'];
}


$query = "SELECT * FROM cursos WHERE ID_cur = '$Cursos_ID_cur'"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $nomb_cur = $row['nomb_cur'];
}

$query = "SELECT * FROM usuario_has_cursos WHERE Cursos_ID_cur = '$Cursos_ID_cur' AND Usuario_rol='Administrador'"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $cedu_profe = $row['Usuario_ID_user'];
}

$query = "SELECT * FROM usuario WHERE cedu_user = '$cedu_profe'"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Profesor = $row['nomb_user'];
}

$editar=$_GET['editarid']; 
$query = "SELECT * FROM usuario WHERE cedu_user = $editar"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Nombre_estudiante_editar = $row['nomb_user'];
    $Apellido_estudiante_editar = $row['apelli_user'];
   }

$query = "SELECT * FROM usuario_has_cursos WHERE Usuario_ID_user = $editar"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $calificacion_user_estudiante_editar = $row['calificacion_user'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo"<title>Estudiantes $nomb_cur</title>"?>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/styles/css/style.css">

   <link rel="stylesheet" href="assets/styles/css/cursos.css">
   <link rel="stylesheet" href="subir.css">
</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">Corblaserca.</a>   

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <!--<div id="toggle-btn" class="fas fa-sun"></div>-->
         </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <?php echo "<h3 class='name'>$Nombre</h3>" ?>
         <?php echo "<p class='role'>$Rol_usuario</p>" ?>
         <a href="profile.php" class="btn">Ver perfil</a>
         <div class="flex-btn">
            <a href="php/salir.php" class="option-btn">Cerrar sesión</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <?php echo "<h3 class='name'>$Nombre</h3>" ?>
      <?php echo "<p class='role'>$Rol_usuario</p>" ?>
      <a href="profile.php" class="btn">Ver perfil</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Inicio</span></a>
      <a href="cursos.php"><i class="fas fa-chalkboard-teacher"></i><span>Curso</span></a>
      <a href="estudiantes.php"><i class="fas fa-graduation-cap"></i><span>Estudiantes</span></a>
   </nav>

</div>

<section>
<h2 style='font-size:40px'>Modificar estudiante</h2>
<form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size:20px" >Nombre</label>
                <div class="col-sm-6">
                        <input type="text" readonly="readonly" class="form-control"style="font-size:20px" placeholder="Nombre" id="Nombre" name="Nombre" value=<?php echo $Nombre_estudiante_editar;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Apellido</label>
                <div class="col-sm-6">
                        <input type="text" readonly="readonly" class="form-control"style="font-size:20px" placeholder="Apellido" id="Apellido" name="Apellido" value=<?php echo $Apellido_estudiante_editar;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Nota</label>
                <div class="col-sm-6">
                        <input type="text" readonly="readonly" class="form-control"style="font-size:20px" placeholder="Correo" id="Cedula" name="Cedula" value=<?php echo $editar;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Calificación</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:20px" inputMode="numeric" id="Nota" name="Nota" value=<?php echo $calificacion_user_estudiante_editar;?>>
                </div>
            </div>
        </form>
      </table>
      <button type="submit" class="btn btn-primary" onclick="registrar()">Actualizar</button>
      <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>


</section>







<<!--footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>-->

<!-- custom js file link  -->
<script src="Scripts/home.js"></script>
<script src="Scripts/actualizar-nota.js"></script>


   
</body>
</html>