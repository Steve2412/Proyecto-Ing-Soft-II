<?php
require "conexion.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $pdo= $conectar->prepare("DELETE FROM cursos WHERE ID_cur =?");
    $pdo->execute([$id]);
    '<script language="javascript">alert("Curso Eliminado Exitosamente");</script>';
    echo "<script> location.href='../crud-admin-cursos.php' </script>";
}


?>