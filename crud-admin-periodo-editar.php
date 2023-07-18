<?php
require "php/conexion.php";
$id=$_GET['editarid']; 
$query = "SELECT * FROM periodo WHERE ID_peri = '$id'"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $ID = $row['ID_peri'];
    $Nombre = $row['nomb_peri'];
    $Fecha_Inic = $row['fech_ini_peri'];
    $Fecha_Fin = $row['fech_fin_peri'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="Scripts/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    <div class="container my-9">
        <h2>Editar <?php echo $Nombre?> </h2>
        <form id="Formulario">
        <textarea id="id_o" name="id_o" hidden value=<?php echo $ID;?>><?php echo $ID;?></textarea> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="ID" id="ID" name="ID" value=<?php echo $ID;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                        <textarea type="text" class="form-control" placeholder="Nombre" id="Nombre" name="Nombre"><?php echo $Nombre;?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Inicio" name="Fecha-Inicio" max="2030-12-31" class="input-group date" value=<?php echo $Fecha_Inic;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Fin" name="Fecha-Fin" max="2030-12-31" class="input-group date" value=<?php echo $Fecha_Fin;?>>
                </div>
            </div>


        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Actualizar</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>

<script src="Scripts/actualizar-periodo-crud.js" ></script>

</html>