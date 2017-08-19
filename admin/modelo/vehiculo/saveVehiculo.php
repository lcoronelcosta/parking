<?php
    session_start();
    include_once("VehiculoCollector.php");
    include_once("Vehiculo.php");
	$descripcion = $_POST['descripcion'];
	$placa = $_POST['placa'];
    $tipo = $_POST['tipo'];
    $vehiculoCollectorObj = new VehiculoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $roll = substr ("$rol", 0,1);
        if($vehiculoCollectorObj->buscarVehiculo($placa)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddVehiculo.php'>";
        }
        else{
        $vehiculoCollectorObj->createVehiculo($descripcion, $placa, $tipo);
        $mensaje = "EL USUARIO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        }
        ?>
  
    </body>
</html>