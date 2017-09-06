<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    include_once("Estacionamiento.php");
    $nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];
    $EstacionamientoCollectorObj = new EstacionamientoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $roll = substr ("$rol", 0,1);
        if($EstacionamientoCollectorObj->buscarPaqueadero($nombre)){
            $mensaje = "ERROR EL PARQUEADERO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddEstacionamiento.php'>";
        }
        else{
        $EstacionamientoCollectorObj->createEstacionamiento($nombre, $direccion, $latitud, $longitud, $numero, $estado);
        $mensaje = "EL ESTACIONAMIENTO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        }
        ?>
  
    </body>
</html>
