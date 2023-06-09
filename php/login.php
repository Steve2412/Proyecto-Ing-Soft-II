<?php
require "conexion.php";

$cedula = isset($_POST['Cedula']) ? $_POST["Cedula"] : "";
$contra = isset($_POST['Contra']) ? $_POST["Contra"] : "";



$pdo = $conectar->prepare("SELECT cedu_user FROM usuario WHERE cedu_user = ?");
$pdo->execute([$cedula]);
$result = $pdo->fetchColumn();

if($result>0){
    $pdo = $conectar->prepare("SELECT contra_user FROM usuario WHERE contra_user = ?");
    $pdo->execute([$contra]);
    $result = $pdo->fetchColumn();
    if($result>0){
        echo json_encode("1");
    }
    else{
        echo json_encode("2");
    }
}
else{
    echo json_encode("3");
}
?>