<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    include_once("Estacionamiento.php");
    $id_parqueadero = $_POST['id_parqueadero'];
	$numero = $_POST['numero'];
	$estado = $_POST['estado'];
    $estacionamientoCollectorObj = new EstacionamientoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $estado2 = substr ("$estado", 0,1);
        if($estacionamientoCollectorObj->buscarEstacionamiento($id_parqueadero, $numero)){
            $mensaje = "ERROR EL ESTACIONAMIENTO YA SE ENCUENTRA REGISTRADA";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddEstacionamiento.php'>";
        }
        else{
        $estacionamientoCollectorObj->createEstacionamiento($id_parqueadero, $numero, $estado2);
        $mensaje = "EL ESTACIONAMIENTO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        }
        ?>
  
    </body>
</html>
