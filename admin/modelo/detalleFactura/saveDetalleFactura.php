<?php
    session_start();
    include_once("DetalleFacturaCollector.php");
    include_once("DetalleFactura.php");
	$tiempo = $_POST['tiempo'];
	$total = $_POST['total'];
    $id_factura = $_POST['id_factura'];
    $detalleFacturaCollectorObj = new DetalleFacturaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        //$roll = substr ("$rol", 0,1);
        if($detalleFacturaCollectorObj->buscarDetalleFactura($tiempo)){
            $mensaje = "ERROR DETALLE FACTURA YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddDetalleFactura.php'>";
        }
        else{
        $detalleFacturaCollectorObj->createDetalleFactura($tiempo, $total, $id_factura);
        $mensaje = "DETALLE FACTURA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readDetalleFactura.php'>";
        }
        ?>
  
    </body>
</html>
