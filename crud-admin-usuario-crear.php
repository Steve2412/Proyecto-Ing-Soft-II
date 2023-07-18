<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Crear usuario</title>
</head>
<body>
    <div class="container my-9">
        <h2>Crear Usuario</h2>
        <form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Nombre" id="Nombre" name="Nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Apellido" id="Apellido" name="Apellido">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Correo" id="Correo" name="Correo">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cédula</label>
                <div class="col-sm-6">
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" maxlength="10" inputMode="numeric" placeholder="Cedula" id="Cedula" name="Cedula">
                </div>
            </div>

            <div class="row mb-3" id="Genero">
                <label class="col-sm-3 col-form-label">Género</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Genero" id="option-1" value="M" checked>
                    <label class="form-check-label" for="option-1">Hombre</label> 
                    <input type="radio" class="form-check-input" name="Genero" id="option-2" value="F">
                    <label class="form-check-label" for="option-2">Mujer</label> 
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Dirección</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Direccion" id="Direccion" name="Direccion" maxlength="15">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Teléfono</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" inputMode="numeric" placeholder="xxxx-xxxxxxx" id="Telefono" name="Telefono">
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
                        <input type="date" id="Fecha-Insertar" name="Fecha" max="2023-12-31" class="input-group date">
                </div>
                
            </div>

            
            <div class="row mb-3" id="Estado">
                <label class="col-sm-3 col-form-label">Estado</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Estado" id="option-1" value="Activo"  checked>
                    <label class="form-check-label" for="option-1">Activo</label> 
                    <input type="radio" class="form-check-input" name="Estado" id="option-2" value="Inactivo">
                    <label class="form-check-label" for="option-2">Inactivo</label> 
                </div>  
            </div>
            
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Registrarse</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>
<script src="Scripts/registro-crud.js" ></script>
</html>