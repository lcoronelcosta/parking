<?php
session_start();
include_once("DetalleFacturaCollector.php");
$id_detalle_facura = $_POST['id_detalle_facura'];
$tiempo = $_POST['tiempo']; 
$total = $_POST['total'];
$id_factura = $_POST['id_factura'];
$detalleFacturaCollectorObj = new DetalleFacturaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Detalle Factura</title>
    </head>
    <body>
        <?php
       
            $detalleFacturaCollectorObj->updateDetalleFactura($id_detalle_facura,$tiempo,$total, $id_factura);
            $mensaje = "DETALLE FACTURA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readDetalleFactura.php'>";
        ?>
    </body>
</html>
