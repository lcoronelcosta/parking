<?php
    session_start();
    include_once("FacturaCollector.php");
    include_once("Factura.php");
	$id_factura = $_POST['id_factura'];
	$id_reserva = $_POST['id_reserva'];
    $id_pago = $_POST['id_pago'];
    $total_multa = $_POST['total_multa'];
    $total_pagar = $_POST['total_pagar'];
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
        $facturaCollectorObj->updateFactura($id_factura, $id_reserva, $id_pago, $total_multa, $total_pagar, $estadoAux);
        $mensaje = "LA FACTURA SE MODIFICO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readFactura.php'>";
        ?>
  
    </body>
</html>