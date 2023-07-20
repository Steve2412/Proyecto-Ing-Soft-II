<?php
session_start();
$usuario = $_SESSION['usuario'];
require "conexion.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];


    $pdo= $conectar->prepare("DELETE FROM foro WHERE mensaje_foro = '$id' AND usuario_id_foro = '$usuario'");
    $pdo->execute();
    '<script language="javascript">alert("Mensaje Eliminado Exitosamente");</script>';
    echo "<script> location.href='../foro.php' </script>";
}


?>