<?php
    session_start();
    include_once("DetalleFacturaCollector.php");
    $id_detalle_facura = $_GET['ID'];
    $detalleFacturaCollectorObj = new DetalleFacturaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Factura</title>
    </head>
    <body>
        <?php
        $detalleFacturaCollectorObj->deleteDetalleFactura($id_detalle_facura);
        $mensaje = "EL DETALLE FACTURA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readDetalleFactura.php'>";
        ?>
    </body>
</html>
