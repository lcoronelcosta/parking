<?php
session_start();
include_once("EstacionamientoCollector.php");
$id_estacionamiento = $_POST['id_estacionamiento'];
$id_parqueadero = $_POST['id_parqueadero'];
$estacionamientoModificado = $_POST['numeroModificado']; 
$estacionamientoActual = $_GET['numero'];
$estado = $_POST['estado'];
$estacionamientoCollectorObj = new EstacionamientoCollector();
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
        $estado2 = substr ("$estado", 0,1);
        //$roll = substr ("$rol", 0,1);
        if(trim($estacionamientoActual) == trim($estacionamientoModificado)){
            $estacionamientoCollectorObj->updateEstacionamiento($id_estacionamiento, $id_parqueadero, $estacionamientoModificado, $estado);
            $mensaje = "EL ESTACIONAMIENTO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        }
        elseif($estacionamientoCollectorObj->buscarEstacionamiento($id_parqueadero, $estacionamientoModificado)){
            $mensaje = "ERROR EL ESTACIONAMIENTO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditEstacionamiento.php?id_estacionamiento=$id_estacionamiento & id_parqueadero=$id_parqueadero & numero=$estacionamientoModificado & estado=$estado'>";
        }
        else{
            $estacionamientoCollectorObj->updateEstacionamiento($id_estacionamiento, $id_parqueadero, $estacionamientoModificado, $estado2);
            $mensaje = "EL ESTACIONAMIENTO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readEstacionamiento.php'>";
        }
  ?>
    </body>
</html>