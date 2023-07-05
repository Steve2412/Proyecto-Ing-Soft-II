<?php
require "conexion.php";
$id = isset($_POST['ID']) ? $_POST["ID"] : "";
$nombre = isset($_POST['Nombre']) ? $_POST["Nombre"] : "";
$horas = isset($_POST['Horas']) ? $_POST["Horas"] : "";
$precio = isset($_POST['Precio']) ? $_POST["Precio"] : "";
$cupo_min = isset($_POST['Cupo_min']) ? $_POST["Cupo_min"] : "";
$cupo_max = isset($_POST['Cupo_max']) ? $_POST["Cupo_max"] : "";
$video = isset($_POST['Video']) ? $_POST["Video"] : "";
$descripcion = isset($_POST['Descripcion']) ? $_POST["Descripcion"] : "";
$tema1T = isset($_POST['Tema1T']) ? $_POST["Tema1T"] : "";
$tema1C = isset($_POST['Tema1C']) ? $_POST["Tema1C"] : "";
$tema2T = isset($_POST['Tema2T']) ? $_POST["Tema2T"] : "";
$tema2C = isset($_POST['Tema2C']) ? $_POST["Tema2C"] : "";
$tema3T = isset($_POST['Tema3T']) ? $_POST["Tema3T"] : "";
$tema3C = isset($_POST['Tema3C']) ? $_POST["Tema3C"] : "";
$tema4T = isset($_POST['Tema4T']) ? $_POST["Tema4T"] : "";
$tema4C = isset($_POST['Tema4C']) ? $_POST["Tema4C"] : "";

    $pdo = $conectar->prepare("SELECT ID_cur FROM cursos WHERE ID_cur = ?");
    $pdo->execute([$id]);
    $result = $pdo->fetchColumn();

    if($result>0){
        echo json_encode("1");

    }else{
        $pdo= $conectar->prepare ("INSERT INTO cursos (ID_cur,nomb_cur,horar_cur,prec_cur,cupos_cur_min,cupos_cur_max,
        conte_video,descrip_cur,tema1_titu_cur,tema1_desc_cur,tema2_titu_cur,tema2_desc_cur,tema3_titu_cur,tema3_desc_cur,tema4_titu_cur,tem4_desc_cur) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $pdo->bindParam(1,$id);
        $pdo->bindParam(2,$nombre);
        $pdo->bindParam(3,$horas);
        $pdo->bindParam(4,$precio);
        $pdo->bindParam(5,$cupo_min);
        $pdo->bindParam(6,$cupo_max);
        $pdo->bindParam(7,$video);
        $pdo->bindParam(8,$descripcion);
        $pdo->bindParam(9,$tema1T);
        $pdo->bindParam(10,$tema1C);
        $pdo->bindParam(11,$tema2T);
        $pdo->bindParam(12,$tema2C);
        $pdo->bindParam(13,$tema3T);
        $pdo->bindParam(14,$tema3C);
        $pdo->bindParam(15,$tema4T);
        $pdo->bindParam(16,$tema4C);

        $pdo->execute();
        echo json_encode("2");
        
        
    }