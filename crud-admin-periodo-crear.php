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
        <h2>Crear Usuario</h2>
        <form id="Formulario">
        <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="ID" id="ID" name="ID">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre del periodo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" name="Nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Inicio del periodo</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Inicio" name="Fecha-Inicio" max="2030-12-31" class="input-group date">
                </div>
                
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fecha Fin del periodo</label>
                <div class="col-sm-6">
                        <input type="date" id="Fecha-Fin" name="Fecha-Fin" max="2030-12-31" class="input-group date">
                </div>
                
            </div>
            
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Registrar</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>

<script src="Scripts/registro-periodo-crud.js" ></script>
</html>