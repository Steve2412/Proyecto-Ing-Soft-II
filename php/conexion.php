<?php

$conexion=mysqli_connect("localhost","root","root","prueba");

if (!$conexion){
    die("No se pudo conectar".mysqli_error);
}
echo "conexion exitosa";
    mysqli_close($conexion);


?>