<?php
    session_start();
    include_once("PropietarioCollector.php");
    $id_propietario = $_GET['ID'];
    $propietarioCollectorObj = new PropietarioCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Propietario</title>
    </head>
    <body>
        <?php
        $propietarioCollectorObj->deletePropietario($id_propietario);
        $mensaje = "EL PROPIETARIO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPropietario.php'>";
        ?>
    </body>
</html>
