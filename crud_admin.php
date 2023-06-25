<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="Scripts/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    <div class="container my-9">
        <form method="GET   ">
            <input type="text" class="form-control me-2" id="getData" placeholder="Buscar estudiante" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
            <button class="btn btn-dark btn-sm"> Buscar</button>
        </form>
        <h2>Lista Estudiantes</h2>  
        <a class="btn btn-primary" role="button" href="Registro.html" name="sumbit">Nuevo Estudiante</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>Fecha Nacimiento</th>
                    <th>Genero</th>
                </tr>
            </thead>

            <tbody id="showdata">
            <?php
            require "php/conexion.php";

            if (isset($_GET['search'])){

                

                $filtervalues=$_GET['search'];
                $query = "SELECT * FROM usuario WHERE CONCAT(cedu_user,nomb_user,apelli_user) LIKE '%$filtervalues%'";
                $result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
            
                    foreach ($result as $row){
                    echo"
                    <tr>
                        <td>$row[cedu_user]</td>
                        <td>$row[nomb_user]</td>
                        <td>$row[apelli_user]</td>
                        <td>$row[correo_user]</td>
                        <td>$row[dirre_user]</td>
                        <td>$row[numer_user]</td>
                        <td>$row[contra_user]</td>
                        <td>$row[fech_naci_user]</td>
                        <td>$row[sexo_user]</td>
                        <td>
                            <a class='btn btn-primary btn-sm'>Editar</a>
                            <a class='btn btn-danger btn-sm' href='php/eliminar.php?deleteid=$row[cedu_user]'>Eliminar</a>
                        </td>
                    </tr>
                    ";}
            }
            else{
            $query = "SELECT * FROM usuario";
            $result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);

            foreach ($result as $row){
                echo"
                    <tr>
                        <td>$row[cedu_user]</td>
                        <td>$row[nomb_user]</td>
                        <td>$row[apelli_user]</td>
                        <td>$row[correo_user]</td>
                        <td>$row[dirre_user]</td>
                        <td>$row[numer_user]</td>
                        <td>$row[contra_user]</td>
                        <td>$row[fech_naci_user]</td>
                        <td>$row[sexo_user]</td>
                        <td>
                            <a class='btn btn-primary btn-sm'>Editar</a>
                            <a class='btn btn-danger btn-sm' href='php/eliminar.php?deleteid=$row[cedu_user]'>Eliminar</a>
                        </td>
                    </tr>
                ";
            }

        }

            ?>
            </tbody>

        </table>

    </div>

    <script>
        
        $(document).ready(function(){
        $("#getData".on("keyup",function(){
                
            }))
        });
    </script>
    
</body>
</html>