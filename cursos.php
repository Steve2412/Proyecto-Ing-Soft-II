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
    $tema1_titu_cur = $row['tema1_titu_cur'];
    $tema1_desc_cur = $row['tema1_desc_cur'];
    $tema2_titu_cur = $row['tema2_titu_cur'];
    $tema2_desc_cur = $row['tema2_desc_cur'];
    $tema3_titu_cur = $row['tema3_titu_cur'];
    $tema3_desc_cur = $row['tema3_desc_cur'];
    $tema4_titu_cur = $row['tema4_titu_cur'];
    $tema4_desc_cur = $row['tem4_desc_cur'];
    $conte_video = $row['conte_video'];
    $conte_archi = $row['conte_archi'];
}

$split_1 = array_map(
   function($value) {
       return implode('+', $value);
   },
   array_chunk(explode('+', $tema1_desc_cur), 1)
);

$split_2 = array_map(
   function($value) {
       return implode('+', $value);
   },
   array_chunk(explode('+', $tema2_desc_cur), 1)
);

$split_3 = array_map(
   function($value) {
       return implode('+', $value);
   },
   array_chunk(explode('+', $tema3_desc_cur), 1)
);

$split_4 = array_map(
   function($value) {
       return implode('+', $value);
   },
   array_chunk(explode('+', $tema4_desc_cur), 1)
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo"<title>$nomb_cur</title>"?>

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
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
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

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Inicio</span></a>
      <a href="estudiantes.php"><i class="fas fa-graduation-cap"></i><span>Estudiantes</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section id="wrap" class="playlist-details">
<?php echo "<h3 class='name' style='font-size:40px'>$nomb_cur</h3>"; ?>
<br>
<br>
<?php echo "<h1 style='font-size:20px'>En este curso aprenderas los temas basicos de $nomb_cur, como pronombres, verbo to be, como crear oraciones, entre otras cosas</h1>" ?>
<br>
<br>
<h3 style="font-size:20px">Contenido Pragmmatico</h3>
<br>
<br>
<?php echo "<h3 style='font-size:27px'>$tema1_titu_cur</h3>" ?>
<br>
<?php 

foreach($split_1 as $value) {
   print ("<p style='font-size:20px'>$value</p> <br> <br>");
 }
?>

<?php echo "<h3 style='font-size:27px'>$tema2_titu_cur</h3>" ?>
<br><?php 

foreach($split_2 as $value) {
   print rtrim(("<p style='font-size:20px'>$value</p> <br> <br>"));
 }
?>

<?php echo "<h3 style='font-size:27px'>$tema3_titu_cur</h3>" ?>
<br>
<?php 

foreach($split_3 as $value) {
   print ("<p style='font-size:20px'>$value</p> <br> <br>");
 }
?>

<?php echo "<h3 style='font-size:27px'>$tema4_titu_cur</h3>" ?>
<br>
<?php 

foreach($split_4 as $value) {
   print ("<p style='font-size:20px'>$value</p> <br> <br>");
 }
?>

<h3 style="font-size:30px" >Videos explicativos:</h3>
<br><br>
    
<iframe width="560" height="315" src=<?php echo $conte_video ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br><br>
<h3 class="descargar" style="font-size:30px">Descargar pdf de <?php echo $nomb_cur ?></h3>
<br>
    <a class="descargar-btn"  href=<?php ?>download="manual ingles basico.pdf">Descargar archivo</a>
</section>

 <!--<section id="wrap" class="playlist-videos">
   <iframe width="560" height="315" src=<?php echo $conte_video ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br>
    <br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/9p-_NhWuuZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
<section id="wrap" class="descargar-section">
    <h3 class="descargar">Descargar pdf de ingles I</h3>
    <a class="descargar-btn" href=<?php ?>download="manual ingles basico.pdf">Descargar archivo</a>
</section>

<section id="wrap" class="exercises">
<h3 class="exercise-h1">Ejercicios de pronombres personales y posesivos</h3>

<a class="exercise-a" href="https://agendaweb.org/exercises/grammar/pronouns/subject-object-possessive">Personal and posesive pronouns</a>
</section>







<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="Scripts/home.js"></script>

   
</body>
</html>