<?php
require "conexion.php";
$cedula = isset($_POST['Cedula']) ? $_POST["Cedula"] : "";
$cursos = isset($_POST['Cursos']) ? $_POST["Cursos"] : "";
$periodo = isset($_POST['Periodo']) ? $_POST["Periodo"] : "";
$notas = isset($_POST['Nota']) ? $_POST["Nota"] : "";
$rol = isset($_POST['Rol']) ? $_POST["Rol"] : "";



$pdo= $conectar->prepare ("UPDATE usuario_has_cursos SET Usuario_ID_user='$cedula',Cursos_ID_cur='$cursos',Periodo_ID_peri='$periodo',calificacion_user='$notas',
 Usuario_rol='$rol' WHERE Usuario_ID_user='$cedula'");
    $pdo->execute();
    echo json_encode("3");
