<?php
    session_start();
    include_once("ParqueaderoCollector.php");
    $id_parqueadero = $_GET['ID'];
    $parqueaderoCollectorObj = new ParqueaderoCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Parqueadero</title>
    </head>
    <body>
        <?php
        $parqueaderoCollectorObj->deleteParqueadero($id_parqueadero);
        $mensaje = "EL PARQUEADERO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readParqueadero.php'>";
        ?>
    </body>
</html>
