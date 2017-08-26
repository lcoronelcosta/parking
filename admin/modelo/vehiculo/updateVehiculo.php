<?php
session_start();
include_once("VehiculoCollector.php");
$id_vehiculo = $_POST['id_vehiculo'];
$vehiculoModificado = $_POST['vehiculoModificado']; 
$placa = $_POST['placa'];
$tipo = $_POST['tipo'];
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
        //$roll = substr ("$rol", 0,1);
        if(trim($vehiculoActual) == trim($vehiculoModificado)){
            $vehiculoCollectorObj->updateVehiculo($id_vehiculo, $vehiculoModificado, $placa, $tipo);
            $mensaje = "EL VEHICULO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
        }
        else{
            if($vehiculoCollectorObj->buscarVehiculo($vehiculoModificado)){
            $mensaje = "ERROR EL VEHICULO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditVehiculo.php?id_vehiculo=$id_vehiculo & descripcion=$vehiculoModificado & placa=$placa & tipo=$tipo'>";
            }
            else{
                 $vehiculoCollectorObj->updateVehiculo($id_vehiculo, $vehiculoModificado, $placa, $tipo);
            $mensaje = "EL VEHICULO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readVehiculo.php'>";
            }
        }
        ?>
    </body>
</html>