<?php
    session_start();
    include_once("DetFacturaCollector.php");
    $id_detalle_facura = $_GET['ID'];
    $id_factura = $_GET['ID_FACTURA'];
    $detFacturaCollectorObj = new DetFacturaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Detalle</title>
    </head>
    <body>
        <?php
        $detFacturaCollectorObj->deleteDetFactura($id_detalle_facura, $id_factura);
        $mensaje = "EL CLIENTE SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readDetFactura.php'>";
        ?>
    </body>
</html>
