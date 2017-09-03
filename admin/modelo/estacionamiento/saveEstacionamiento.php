<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    include_once("Estacionamiento.php");
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
        //$roll = substr ("$rol", 0,1);
        if($estacionamientoCollectorObj->buscarEstacionamiento($numero)){
            $mensaje = "ERROR EL ESTACIONAMIENTO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddEstacionamiento.php'>";
        }
        else{
        $estacionamientoCollectorObj->createEstacionamiento($numero, $estado);
        $mensaje = "EL ESTACIONAMIENTO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        }
        ?>
  
    </body>
</html>
