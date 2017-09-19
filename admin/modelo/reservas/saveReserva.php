<?php
    session_start();
    include_once("ReservaCollector.php");
    include_once("Reserva.php");

    include_once("../multaReserva/MultaReservaCollector.php");
    include_once("../multaReserva/MultaReserva.php");

	$id_cliente = $_POST['id_c'];
    $id_vehiculo = $_POST['id_v'];
    $id_parqueo = $_POST['id_p'];
    $fecha_inicio = $_POST['fecha_ini'];    
	$fecha_fin = $_POST['fecha_fin'];
    $o_latitud = $_POST['origen_la'];
    $o_longitud = $_POST['origen_lo'];
    $id_estacionamiento = $_POST['id_e'];
    $facturada = $_POST['facturada'];

    $reservaCollectorObj = new ReservaCollector();
    $multaReservaCollectorObj = new MultaReservaCollector();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $reservaCollectorObj->createReserva($id_cliente, $id_vehiculo, $id_parqueo, $fecha_inicio, $fecha_fin, $o_latitud, $o_longitud, $id_estacionamiento, $facturada);
        $mensaje = "LA RESERVA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readReserva.php'>";
        ?>
  
    </body>
</html>
