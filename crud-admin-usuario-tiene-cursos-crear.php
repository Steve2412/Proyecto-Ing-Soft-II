<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Añadir usuario a curso</title>
</head>
<body>
    <div class="container my-9">
        <h2>Agregar estudiante a curso</h2>
        <form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cedula del estudiante</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Cedula" id="Cedula" name="Cedula">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Curso</label>
                <div class="col-sm-6">
                    <select name="Cursos" id="Cursos">
                        <?php
                        require "php/conexion.php";

                        $query = "SELECT * FROM cursos";
                        $result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);

                        foreach($result as $opciones){?>
                        
                            <option><?php echo $opciones['ID_cur']?></option>
                            <?php } ?>
                            <option value=""selected>Ninguno</option>    
 q  
                        
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Periodo</label>
                <div class="col-sm-6">
                <select name="Periodo" id="Periodo">
                        <?php
                        require "php/conexion.php";

                        $query = "SELECT * FROM periodo";
                        $result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);

                        foreach($result as $opciones){?>
                        
                            
                        <option><?php echo $opciones['ID_peri']?></option>
                            <?php } ?>
                        <option value=""selected>Ninguno</option>    

                        
                    </select>
                </div>
            </div>

            <div class="row mb-3" id="Rol">
                <label class="col-sm-3 col-form-label">Rol</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Rol" id="option-1" value="Estudiante" checked>
                    <label class="form-check-label" for="option-1">Estudiante</label> 
                    <input type="radio" class="form-check-input" name="Rol" id="option-2" value="Profesor">
                    <label class="form-check-label" for="option-2">Profesor</label>
                    <input type="radio" class="form-check-input" name="Rol" id="option-3" value="Administrador">
                    <label class="form-check-label" for="option-3">Administrador</label> 
                </div>
            </div>

            <div class="row mb-3" id="Estado">
                <label class="col-sm-3 col-form-label">Estado</label>
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" name="Estado" id="option-a" value="Activo" checked>
                    <label class="form-check-label" for="option-1">Activo</label> 
                    <input type="radio" class="form-check-input" name="Estado" id="option-b" value="Finalizado">
                    <label class="form-check-label" for="option-2">Finalizado</label>
                </div>
            </div>
                
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Registrarse</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>
<script src="Scripts/usuario-curso.js" ></script>
</html>