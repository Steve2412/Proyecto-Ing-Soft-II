<?php
require "conexion.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $pdo= $conectar->prepare("DELETE FROM usuario WHERE cedu_user =?");
    $pdo->execute([$id]);
    echo "eliminado";
}


?>