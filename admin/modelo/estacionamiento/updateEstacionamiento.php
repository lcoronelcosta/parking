<?php
session_start();
include_once("EstacionamientoCollector.php");
$id_estacionamiento = $_POST['id_estacionamiento'];
$numero = $_POST['numero']; 
$estado = $_POST['estado'];
$estacionamientoCollectorObj = new EstacionamientoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Estacionamiento</title>
    </head>
    <body>
        <?php
       
            $estacionamientoCollectorObj->updateEstacionamiento($id_estacioanamiento,$numero, $estado);
            $mensaje = "EL ESTACIONAMIENTO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        ?>
    </body>
</html>
