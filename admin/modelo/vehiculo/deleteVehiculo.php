<?php
    session_start();
    include_once("VehiculoCollector.php");
    $id_vehiculo = $_GET['ID'];
    $vehiculoCollectorObj = new VehiculoCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        $vehiculoCollectorObj->deleteVehiculo($id_vehiculo);
        $mensaje = "EL USUARIO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        ?>
    </body>
</html>
