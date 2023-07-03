<?php
require "conexion.php";
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
extract($_POST);

if(isset($submit)){
    $query = "SELECT usuario_has_cursos FROM usuario";
    $result = $conectar->query($query)->fetchAll(PDO::FETCH_BOTH);
    $html = '';
    $html .= '
        <h2 align="center">Datos Alumnos de Corserca</h2>
        <table style="width:100%; border-collapse:collapse;">
            <tr>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Cedula</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Nombre</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Apellido</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Correo</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Direccion</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Telefono</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Contraseña</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Fecha Nacimiento</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:center;">Genero</th>
            </tr>   
    ';
    foreach ($result as $row){
        $html .= '
        <tr>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["cedu_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["nomb_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["apelli_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["correo_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["dirre_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["numer_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["contra_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["fech_naci_user"].'</td>
            <td style="border:1px solid #ddd; padding:8px; text-align:center;">'.$row["sexo_user"].'</td>
        </tr>
        ';

    }
    $html .= '</table>';
    $dompdf = NEW DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->setPaper("A4","landscape");
    $dompdf->render();
    $dompdf->stream("alumnos.pdf");

}
?>
