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
        <title>Delete Vehiculo</title>
    </head>
    <body>
        <?php
        $vehiculoCollectorObj->deleteVehiculo($id_vehiculo);
        $mensaje = "EL VEHICULO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        ?>
    </body>
</html>
