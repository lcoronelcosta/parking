<?php
    session_start();
    include_once("FacturaCollector.php");
    include_once("Factura.php");
    include_once("../multaReserva/MultaReservaCollector.php");
    include_once("../multaReserva/MultaReserva.php");

	$id_reserva = $_POST['id_reserva'];
	$id_pago = $_POST['id_pago'];
    $estado = $_POST['estado'];
    $total_multa = $_POST['total_multa'];

    $facturaCollectorObj = new FacturaCollector();
    $multaReservaCollectorObj = new MultaReservaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php

        $estadoAux = substr ("$estado", 0,1);
        $facturaCollectorObj->createFactura($id_reserva, $id_pago, $estadoAux, $total_multa);
        $multaReservaCollectorObj->generarDetalles($id_reserva);
        $facturaCollectorObj->calcularTotal($id_reserva, $total_multa);
        $mensaje = "LA FACTURA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readFactura.php'>";


        ?>
  
    </body>
</html>