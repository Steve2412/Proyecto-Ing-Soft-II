<?php
require "conexion.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $pdo= $conectar->prepare("UPDATE periodo SET estado_peri='Finalizado' WHERE ID_peri =?");
    $pdo->execute([$id]);
    $pdo_2= $conectar->prepare("UPDATE usuario_has_cursos SET estado_usuario_has_cursos='Finalizado' WHERE Periodo_ID_peri =?");
    $pdo_2->execute([$id]);
    '<script language="javascript">alert("Usuario Eliminado Exitosamente");</script>';
    echo "<script> location.href='../crud-admin-periodo.php' </script>";
}


?>