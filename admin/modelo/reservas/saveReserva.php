<?php
    session_start();
    include_once("VehiculoCollector.php");
    include_once("Vehiculo.php");
	$descripcion = $_POST['descripcion'];
	$placa = $_POST['placa'];
    $tipo = $_POST['tipo'];
    $id_cliente = $_POST['id_cliente'];
    $vehiculoCollectorObj = new VehiculoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        //$roll = substr ("$rol", 0,1);
        if($vehiculoCollectorObj->buscarVehiculo($placa)){
            $mensaje = "ERROR EL VEHICULO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddVehiculo.php'>";
        }
        else{
        $vehiculoCollectorObj->createVehiculo($descripcion, $placa, $tipo, $id_cliente);
        $mensaje = "EL VEHICULO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        }
        ?>
  
    </body>
</html>
