<?php
//include "conexion.php";

$cedula = isset($_POST['Cedula']) ? $_POST["Cedula"] : "";
$nombre = isset($_POST['Nombre']) ? $_POST["Nombre"] : "";
$apellido = isset($_POST['Apellido']) ? $_POST["Apellido"] : "";
$correo = isset($_POST['Correo']) ? $_POST["Correo"] : "";
$direccion = isset($_POST['Direccion']) ? $_POST["Direccion"] : "";
$telefono = isset($_POST['Telefono']) ? $_POST["Telefono"] : "";
$contra = isset($_POST['Contra']) ? $_POST["Contra"] : "";
$fecha = isset($_POST['Fecha']) ? $_POST["Fecha"] : "";

try{
    $conectar=new PDO('mysql:host=localhost;port=3306;dbname=prueba','root','root');
    $conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $conectar->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

    echo json_encode("Conectado");

    $pdo= $conectar->prepare ("INSERT INTO usuario (cedu_user,nomb_user,apelli_user,correo_user,contra_user,dirre_user,numer_user,fech_naci_user) 
    VALUES (?,?,?,?,?,?,?,?)");
    $pdo->bindParam(1,$cedula);
    $pdo->bindParam(2,$nombre);
    $pdo->bindParam(3,$apellido);
    $pdo->bindParam(4,$correo);
    $pdo->bindParam(5,$contra);
    $pdo->bindParam(6,$direccion);
    $pdo->bindParam(7,$telefono);
    $pdo->bindParam(8,$fecha);



    $pdo->execute();

    echo json_encode('true');


} catch(PDOException $error){
    echo $error->geMessage();
    die;

}

?>