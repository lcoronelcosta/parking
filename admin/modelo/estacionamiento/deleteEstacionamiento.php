<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    $id_estacionamiento = $_GET['ID'];
    $estacionamientoCollectorObj = new EstacionamientoCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Estacionamiento</title>
    </head>
    <body>
        <?php
        $estacionamientoCollectorObj->deleteEstacionamiento($id_estacionamiento);
        $mensaje = "ES ESTACIONAMIENTO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        ?>
    </body>
</html>
