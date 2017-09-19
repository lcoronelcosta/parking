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
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        $detalleFacturaCollectorObj->deleteDetalleFactura($id_detalle_facura);
        $mensaje = "EL DETALLE FACTURA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readDetalleFactura.php'>";
        ?>
    <?php
        }
    
    else {
       // echo "permiso denegado";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
    }
    ?>        
    </body>
</html>
