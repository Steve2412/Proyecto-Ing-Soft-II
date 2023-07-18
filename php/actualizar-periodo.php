<?php
require "conexion.php";
$id_o = isset($_POST['id_o']) ? $_POST["id_o"] : "";
$id = isset($_POST['ID']) ? $_POST["ID"] : "";
$nombre = isset($_POST['Nombre']) ? $_POST["Nombre"] : "";
$fecha_1 = isset($_POST['Fecha-Inicio']) ? $_POST["Fecha-Inicio"] : "";
$fecha_2 = isset($_POST['Fecha-Fin']) ? $_POST["Fecha-Fin"] : "";

$pdo= $conectar->prepare ("UPDATE periodo SET ID_peri = '$id',nomb_peri='$nombre',fech_ini_peri='$fecha_1',fech_fin_peri='$fecha_2' WHERE ID_peri  = '$id_o'");
$pdo->execute();
echo json_encode("2");
