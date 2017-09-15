<?php
    session_start();
    include_once("FacturaCollector.php");
    include_once("Factura.php");
	$id_reserva = $_POST['id_reserva'];
	$id_pago = $_POST['id_pago'];
    $estado = $_POST['estado'];
    $facturaCollectorObj = new FacturaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $estadoAux = substr ("$estado", 0,1);
        $facturaCollectorObj->createFactura($id_reserva, $id_pago, $estadoAux
            );
        $mensaje = "LA FACTURA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readFactura.php'>";
        ?>
  
    </body>
</html>