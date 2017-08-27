<?php
    session_start();
    include_once("PropietarioCollector.php");
    include_once("Propietario.php");
    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$ruc = $_POST['ruc'];
	$numerocuenta = $_POST['numerocuenta'];
    $estado = $_POST['estado'];
    $propietarioCollectorObj = new PropietarioCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        //$roll = substr ("$rol", 0,1);
        if($propietarioCollectorObj->buscarPropietario($nombre)){
            $mensaje = "ERROR EL PROPIETARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddPropietario.php'>";
        }
        else{
        $propietarioCollectorObj->createPropietario($nombre, $apellido, $ruc, $numerocuenta, $estado);
        $mensaje = "EL PROPIETARIO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPropietario.php'>";
        }
        ?>
  
    </body>
</html>