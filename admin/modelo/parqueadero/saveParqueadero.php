<?php
    session_start();
    include_once("ParqueaderoCollector.php");
    include_once("Parqueadero.php");
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $id_propietario = $_POST['id_pr'];
    $parqueaderoCollectorObj = new ParqueaderoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        if($parqueaderoCollectorObj->buscarParqueadero($nombre)){
            $mensaje = "ERROR EL PARQUEADERO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddParqueadero.php'>";
        }
        else{
        $parqueaderoCollectorObj->createParqueadero($id_propietario, $nombre, $direccion, $latitud, $longitud);
        $mensaje = "EL PARQUEADERO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readParqueadero.php'>";
        }
        ?>
  
    </body>
</html>
