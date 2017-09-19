<?php
session_start();
include_once("MultaReservaCollector.php");
$id_multa_x_factura = $_POST['id_multa_x_factura'];
$id_multa = $_POST['id_multa']; 
$id_reserva = $_POST['id_reserva'];
$valor = $_POST['valor'];
$multaReservaCollectorObj = new MultaReservaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Multa por Reserva</title>
    </head>
    <body>
        <?php
       
            $multaReservaCollectorObj->updateMultaReserva($id_multa_x_factura,$id_multa,$id_reserva, $valor);
            $mensaje = "LA MULTA POR RESERVA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMultaReserva.php'>";
        ?>
    </body>
</html>
