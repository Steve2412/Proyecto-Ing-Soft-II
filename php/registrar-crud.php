<?php
require "conexion.php";
$cedula = isset($_POST['Cedula']) ? $_POST["Cedula"] : "";
$cedula = "V-".$cedula;
$nombre = isset($_POST['Nombre']) ? $_POST["Nombre"] : "";
$apellido = isset($_POST['Apellido']) ? $_POST["Apellido"] : "";
$correo = isset($_POST['Correo']) ? $_POST["Correo"] : "";
$direccion = isset($_POST['Direccion']) ? $_POST["Direccion"] : "";
$telefono = isset($_POST['Telefono']) ? $_POST["Telefono"] : "";
$contra = isset($_POST['Contra']) ? $_POST["Contra"] : "";
$fecha = isset($_POST['Fecha']) ? $_POST["Fecha"] : "";
$gen = isset($_POST['Genero']) ? $_POST["Genero"] : "";
$estado = isset($_POST['Estado']) ? $_POST["Estado"] : "";

    $pdo = $conectar->prepare("SELECT cedu_user FROM usuario WHERE cedu_user = ?");
    $pdo->execute([$cedula]);
    $result = $pdo->fetchColumn();

    if($result>0){
        echo json_encode("1");

    }else{
        $pdo= $conectar->prepare ("INSERT INTO usuario (cedu_user,nomb_user,apelli_user,correo_user,contra_user,dirre_user,numer_user,fech_naci_user,sexo_user,estado_user) 
        VALUES (?,?,?,?,?,?,?,?,?,?)");
        $pdo->bindParam(1,$cedula);
        $pdo->bindParam(2,$nombre);
        $pdo->bindParam(3,$apellido);
        $pdo->bindParam(4,$correo);
        $pdo->bindParam(5,$contra);
        $pdo->bindParam(6,$direccion);
        $pdo->bindParam(7,$telefono);
        $pdo->bindParam(8,$fecha);
        $pdo->bindParam(9,$gen);
        $pdo->bindParam(10,$estado);
        $pdo->execute();
        echo json_encode("2");
        
        
    }
    






?>