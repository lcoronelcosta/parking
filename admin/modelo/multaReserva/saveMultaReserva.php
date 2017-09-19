<?php
    session_start();
    include_once("MultaReservaCollector.php");
    include_once("MultaReserva.php");
	$id_multa = $_POST['id_multa'];
	$id_reserva = $_POST['id_reserva'];
    $valor = $_POST['valor'];
    $multaReservaCollectorObj = new MultaReservaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php

        $multaReservaCollectorObj->createMultaReserva($id_multa, $id_reserva, $valor);
        $mensaje = "LA MULTA POR RESERVA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMultaReserva.php'>";
        
        ?>
  
    </body>
</html>
