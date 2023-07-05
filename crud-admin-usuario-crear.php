<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-9">
        <h2>Crear Usuario</h2>
        <form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" name="Nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Apellido" id="Apellido" name="Apellido">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Correo" id="Correo" name="Correo">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cedula</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" maxlength="10" inputMode="numeric" placeholder="Cedula" id="Cedula" name="Cedula">
                </div>
            </div>

            <div class="row mb-3" id="Genero">
                <label class="col-sm-3 col-form-label">Genero</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Genero" id="option-1" value="M" checked>
                    <label class="form-check-label" for="option-1">Hombre</label> 
                    <input type="radio" class="form-check-input" name="Genero" id="option-2" value="F">
                    <label class="form-check-label" for="option-2">Mujer</label> 
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Direccion</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Direccion" id="Direccion" name="Direccion" maxlength="15">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" inputMode="numeric" placeholder="+58 xxxx-xxxxxxx" id="Telefono" name="Telefono">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contraseña</label>
                <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Contraseña" maxlength="16" id="Contra" name="Contra">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Insertar" name="Fecha" class="input-group date">
                </div>

            <div class="row mb-3" id="Rol">
                <label class="col-sm-3 col-form-label">Rol usuario</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Rol" id="option-a" value="Edu" checked>
                    <label class="form-check-label" for="option-1">Estudiante</label> 
                    <input type="radio" class="form-check-input" name="Rol" id="option-b" value="Admin">
                    <label class="form-check-label" for="option-2">Administrador</label> 
                </div>
            </div>
                
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Registrarse</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>
<script src="Scripts/registro-crud.js" ></script>
</html>