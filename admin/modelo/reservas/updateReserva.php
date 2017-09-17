<?php
session_start();
include_once("ReservaCollector.php");
$id_reserva = $_POST['id_reserva'];
$id_cliente = $_POST['id_c'];
$id_vehiculo = $_POST['id_v'];
$id_parqueo = $_POST['id_p'];
$fecha_inicio = $_POST['fecha_ini']; 
$fecha_fin = $_POST['fecha_fin'];
$origen_la = $_POST['origen_la'];
$origen_lo = $_POST['origen_lo'];
$id_estacionamiento = $_POST['id_e'];
$facturada = $_POST['facturada'];
$reservaCollectorObj = new ReservaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Reserva</title>
    </head>
    <body>
        <?php
            $facAux = substr ("$facturada", 0,1);
            $reservaCollectorObj->updateReserva($id_reserva, $id_cliente, $id_vehiculo, $id_parqueo, $id_estacionamiento, $fecha_inicio, $fecha_fin, $origen_la, $origen_lo, $facAux);
            $mensaje = "LA RESERVA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readReserva.php'>";
        ?>
    </body>
</html>