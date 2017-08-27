<?php
    session_start();
    include_once("ReservaCollector.php");
    include_once("Reserva.php");
	$descripcion = $_POST['descripcion'];
	$placa = $_POST['placa'];
    $tipo = $_POST['tipo'];
    $id_cliente = $_POST['id_cliente'];
    $reservaCollectorObj = new ReservaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $reservaCollectorObj->createReserva($descripcion, $placa, $tipo, $id_cliente);
        $mensaje = "LA RESERVA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readReserva.php'>";
        ?>
  
    </body>
</html>
