<?php
session_start();
include_once("VehiculoCollector.php");
$id_vehiculo = $_POST['id_vehiculo'];
$vehiculoModificado = $_POST['vehiculoModificado']; 
$placa = $_POST['placa'];
$tipo = $_POST['tipo'];
$id_cliente = $_POST['id_c'];
$vehiculoActual = $_GET['descripcion'];
$vehiculoCollectorObj = new VehiculoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
            $tipoAux = substr ("$tipo", 0,1);
            $vehiculoCollectorObj->updateVehiculo($id_vehiculo, $vehiculoModificado, $placa, $tipoAux, $id_cliente);
            $mensaje = "EL VEHICULO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        ?>
    </body>
</html>