<?php
require "conexion.php";
$correo = isset($_POST['Correo']) ? $_POST["Correo"] : "";

$pdo = $conectar->prepare("SELECT correo_user FROM usuario WHERE correo_user = ?");
$pdo->execute([$correo]);
$result = $pdo->fetchColumn();

if($result>0){
    echo json_encode("1");
}else{
    echo json_encode("2");

}
?>