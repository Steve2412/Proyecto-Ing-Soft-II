<?php
require "php/conexion.php";
$id=$_GET['editarid']; 
$query = "SELECT * FROM usuario WHERE cedu_user = $id"; 
$result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
foreach ($result as $row){
    $Nombre = $row['nomb_user'];
    $Apellido = $row['apelli_user'];
    $Correo = $row['correo_user'];
    $Cedula = $row['cedu_user'];
    $Genero = $row['sexo_user'];
    $Direccion = $row['dirre_user'];
    $Numero = $row['numer_user'];
    $Contra = $row['contra_user'];
    $Fecha = $row['fech_naci_user'];
    $Rol = $row['rol'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Editar usuario <?php echo $Nombre?></title>
</head>
<body>
    <div class="container my-9">
        <h2>Editar <?php echo $Nombre?> </h2>
        <form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" name="Nombre" value=<?php echo $Nombre;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Apellido" id="Apellido" name="Apellido" value=<?php echo $Apellido;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Correo" id="Correo" name="Correo" value=<?php echo $Correo;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cedula</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" maxlength="10" inputMode="numeric" placeholder="Cedula" id="Cedula" name="Cedula" value=<?php echo $Cedula;?>> 
                </div>
            </div>

            <div class="row mb-3" id="Genero">
                <label class="col-sm-3 col-form-label">Genero</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Genero" id="option-1" value="M"  <?php echo ($Genero=='M')?'checked':'' ?>>
                    <label class="form-check-label" for="option-1">Hombre</label> 
                    <input type="radio" class="form-check-input" name="Genero" id="option-2" value="F" <?php echo ($Genero=='F')?'checked':'' ?>>
                    <label class="form-check-label" for="option-2">Mujer</label> 
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Direccion</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Direccion" id="Direccion" name="Direccion" maxlength="15" value=<?php echo $Direccion;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" inputMode="numeric" placeholder="+58 xxxx-xxxxxxx" id="Telefono" name="Telefono" value=<?php echo $Numero;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contraseña</label>
                <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Contraseña" maxlength="16" id="Contra" name="Contra" value=<?php echo $Contra;?>>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Insertar" name="Fecha" max="2023-12-31" class="input-group date" value=<?php echo $Fecha;?>>
                </div>
            </div>

            <div class="row mb-3" id="Rol">
                <label class="col-sm-3 col-form-label">Rol usuario</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Rol" id="option-a" value="Edu" <?php echo ($Rol=='Edu')?'checked':'' ?>>
                    <label class="form-check-label" for="option-1">Estudiante</label> 
                    <input type="radio" class="form-check-input" name="Rol" id="option-b" value="Admin" <?php echo ($Rol=='Admin')?'checked':'' ?>
                    <label class="form-check-label" for="option-2">Administrador</label> 
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Actualizar</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>
<script src="Scripts/actualizar-crud.js" ></script>
</html>