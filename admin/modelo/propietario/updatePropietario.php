<?php
session_start();
include_once("PropietarioCollector.php");
$id_propietario = $_POST['id_propietario'];
$nombreModificado = $_POST['nombreModificado']; 
$apellido = $_POST['apellido'];
$ruc = $_POST['ruc'];
$numerocuenta = $_POST['numerocuenta'];
$estado = $_POST['estado'];
$nombreActual = $_GET['nombre'];
$propietarioCollectorObj = new PropietarioCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Propietario</title>
    </head>
   
    <body>
            <?php
                $estadoAux = substr ("$estado", 0,1);
                $propietarioCollectorObj->updatePropietario($id_propietario, $nombreModificado, $apellido, $ruc, $numerocuenta, $estadoAux);
                $mensaje = "EL PROPIETARIO SE MODIFICO EXITOSAMENTE";
                print "<script>alert('$mensaje')</script>";
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPropietario.php'>";
            ?>
    </body>

</html>