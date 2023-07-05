<?php
require "conexion.php";
$id = isset($_POST['ID']) ? $_POST["ID"] : "";
$nombre = isset($_POST['Nombre']) ? $_POST["Nombre"] : "";
$horas = isset($_POST['Horas']) ? $_POST["Horas"] : "";
$precio = isset($_POST['Precio']) ? $_POST["Precio"] : "";
$cupo_min = isset($_POST['Cupo_min']) ? $_POST["Cupo_min"] : "";
$cupo_max = isset($_POST['Cupo_max']) ? $_POST["Cupo_max"] : "";
$video = isset($_POST['Video']) ? $_POST["Video"] : "";
$descripcion = isset($_POST['Descripcion']) ? $_POST["Descripcion"] : "";
$tema1T = isset($_POST['Tema1T']) ? $_POST["Tema1T"] : "";
$tema1C = isset($_POST['Tema1C']) ? $_POST["Tema1C"] : "";
$tema2T = isset($_POST['Tema2T']) ? $_POST["Tema2T"] : "";
$tema2C = isset($_POST['Tema2C']) ? $_POST["Tema2C"] : "";
$tema3T = isset($_POST['Tema3T']) ? $_POST["Tema3T"] : "";
$tema3C = isset($_POST['Tema3C']) ? $_POST["Tema3C"] : "";
$tema4T = isset($_POST['Tema4T']) ? $_POST["Tema4T"] : "";
$tema4C = isset($_POST['Tema4C']) ? $_POST["Tema4C"] : "";

$pdo= $conectar->prepare ("UPDATE cursos SET ID_cur = '$id',nomb_cur = '$nombre',horar_cur = '$horas',prec_cur = '$precio',
prec_cur = '$cupo_min', cupos_cur_max = '$cupo_max',conte_video = '$video',descrip_cur = '$descripcion',tema1_titu_cur = '$tema1T',tema1_desc_cur   ='$tema1C'
,tema2_titu_cur = '$tema2T',tema2_desc_cur='$tema2C',tema3_titu_cur='$tema3T', tema3_desc_cur='$tema3C',tema4_titu_cur='$tema4T',
tem4_desc_cur='$tema4C' WHERE ID_cur = '$id'");
$pdo->execute();
echo json_encode("2");