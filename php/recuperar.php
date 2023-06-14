<?php
require "conexion.php";
$correo = isset($_POST['Correo']) ? $_POST["Correo"] : "";
$contra = isset($_POST['Contra']) ? $_POST["Contra"] : "";

$pdo= $conectar->prepare("UPDATE usuario SET contra_user = ? WHERE correo_user= ?");
$pdo->bindParam(1,$contra);
$pdo->bindParam(2,$correo);
$pdo->execute();
echo json_encode("1");


?>