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
    $Rol = $row['rol'];
}

$query = "SELECT * FROM usuario_has_cursos WHERE Usuario_ID_user = $usuario"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Cursos_ID_cur = $row['Cursos_ID_cur'];
}

$query = "SELECT * FROM cursos WHERE ID_cur = '$Cursos_ID_cur'"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $nomb_cur = $row['nomb_cur'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar <?php echo $Nombre?></title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/styles/css/style copy.css">

      

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">Corblaserca</a>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <!--<div id="toggle-btn" class="fas fa-sun"></div>-->
         </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <?php echo "<h3 class='name'>$Nombre</h3>" ?>
         <?php echo "<p class='role'>$Rol</p>" ?>
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
      <?php echo "<p class='role'>$Rol</p>" ?>
      <a href="profile.php" class="btn">Ver perfil</a>
   </div>

   <nav class="navbar-sex">
      <a href="home.php"><i class="fas fa-home"></i><span>Inicio</span></a>
      <a href="about.html"><i class="fa-solid fa-calendar-days"></i><span>Horario</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Notas</span></a>
      <!--<a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>-->
   </nav>

</div>


<section class="courses">

<h1>Configuraciones del Usuario</h1>


<div class="table">
<form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size:30px" >Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:25px" placeholder="Nombre" id="Nombre" name="Nombre" value=<?php echo $Nombre;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:30px">Apellido</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:25px" placeholder="Apellido" id="Apellido" name="Apellido" value=<?php echo $Apellido;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:30px">Correo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:25px" placeholder="Correo" id="Correo" name="Correo" value=<?php echo $Correo;?>>
                </div>
            </div>

            <div class="row mb-3" id="Genero">
                <label class="col-sm-3 col-form-label"style="font-size:30px">Genero</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input"style="font-size:25px" name="Genero" id="option-1" value="M"  <?php echo ($Genero=='M')?'checked':'' ?>>
                    <label class="form-check-label"style="font-size:25px" for="option-1">Hombre</label> 
                    <input type="radio" class="form-check-input"style="font-size:25px" name="Genero" id="option-2" value="F" <?php echo ($Genero=='F')?'checked':'' ?>>
                    <label class="form-check-label"style="font-size:25px" for="option-2">Mujer</label> 
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:25px">Direccion</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:25px" placeholder="Direccion" id="Direccion" name="Direccion" maxlength="15" value=<?php echo $Direccion;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:30px">Telefono</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control"style="font-size:25px" inputMode="numeric" placeholder="+58 xxxx-xxxxxxx" id="Telefono" name="Telefono" value=<?php echo $Numero;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:30px">Fecha Nacimiento</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Insertar"style="font-size:25px" name="Fecha" class="input-group date" value=<?php echo $Fecha;?>>
                </div>
            </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onClick="registrar()">Guardar Cambios</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>


</section>















<!--<footer class="footer">

   &copy; Todos los derechos reservado por <span>Corblaserca</span> | 2023 all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="Scripts/profile-edit.js"></script>

<script src="Scripts/home.js"></script>

   
</body>
</html>