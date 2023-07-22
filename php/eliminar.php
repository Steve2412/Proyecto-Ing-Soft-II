<?php
require "conexion.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $pdo= $conectar->prepare("UPDATE usuario SET estado_user='Eliminado' WHERE cedu_user =?");
    $pdo->execute([$id]);
    '<script language="javascript">alert("Usuario Eliminado Exitosamente");</script>';
    echo "<script> location.href='../crud-admin-usuario.php' </script>";
}


?>