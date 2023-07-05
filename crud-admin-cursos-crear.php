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
        <h2>Crear Curso</h2>
        <form id="Formulario">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="ID" id="ID" name="ID">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" name="Nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Horas</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Horas" id="Horas" name="Horas">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Precio</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" maxlength="10" inputMode="numeric" placeholder="Precio" id="Precio" name="Precio"> 
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cupo Minimo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Cupo_min" id="Cupo_min" name="Cupo_min" maxlength="15">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cupo maximo</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" inputMode="numeric" placeholder="Cupo_max" id="Cupo_max" name="Cupo_max">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Link Video</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Video" id="Video" name="Video">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Descripcion curso</label>
                <div class="col-sm-6">
                        <input type="text" id="Descripcion" name="Descripcion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 1 Titulo</label>
                <div class="col-sm-6">
                    <textarea type="text" type="text" id="Tema1T"  name="Tema1T" cols="40" class="form-control"></textarea>       
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 1 Contenido</label>
                <div class="col-sm-6">
                        <textarea type="text" type="text" id="Tema1C" style="width:550px;height:100px;"  name="Tema1C" cols="40" class="form-control" ></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 2 Titulo</label>
                <div class="col-sm-6">
                    <textarea type="text" type="text" id="Tema2T"  name="Tema2T" cols="40" class="form-control" ></textarea>       
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 2 Contenido</label>
                <div class="col-sm-6">
                        <textarea type="text" type="text" id="Tema2C" style="width:550px;height:100px;"  name="Tema2C" cols="40" class="form-control" ></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 3 Titulo</label>
                <div class="col-sm-6">
                    <textarea type="text" type="text" id="Tema3T"  name="Tema3T" cols="40" class="form-control" ></textarea>       
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 3 Contenido</label>
                <div class="col-sm-6">
                        <textarea type="text" type="text" id="Tema3C" style="width:550px;height:100px;"  name="Tema3C" cols="40" class="form-control" ></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 4 Titulo</label>
                <div class="col-sm-6">
                    <textarea type="text" type="text" id="Tema4T"  name="Tema4T" cols="40" class="form-control" ></textarea>       
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tema 4 Contenido</label>
                <div class="col-sm-6">
                        <textarea type="text" type="text" id="Tema4C" style="width:550px;height:100px;"  name="Tema4C" cols="40" class="form-control" ></textarea>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="registrar()">Crear curso</button>
        <button type="submit" class="btn btn-secondary" onclick="regresar()">Regresar</button>
    </div>
</body>
<script src="Scripts/crear-curso.js" ></script>
</html>