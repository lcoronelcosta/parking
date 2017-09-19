<?php
    session_start();
    include_once("FacturaCollector.php");
    $id_factura = $_GET['ID'];
    $facturaCollectorObj = new FacturaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Factura</title>
    </head>
    <body>
        <?php
        $facturaCollectorObj->deleteFactura($id_factura);
        $mensaje = "LA FACTURA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readFactura.php'>";
        ?>
    </body>
</html>
