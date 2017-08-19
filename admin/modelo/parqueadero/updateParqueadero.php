<?php
session_start();
include_once("ParqueaderoCollector.php");
$id_parqueadero = $_POST['id_parqueadero'];
$parqueaderoModificado = $_POST['parqueaderoModificado']; 
$direccion = $_POST['direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$parqueaderoActual = $_GET['nombre'];
$parqueaderoCollectorObj = new ParqueaderoCollector();
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
        if(trim($parqueaderoActual) == trim($parqueaderoModificado)){
            $parqueaderoCollectorObj->updateParqueadero($id_parqueadero, $parqueaderoModificado, $direccion, $latitud, $longitud);
            $mensaje = "EL PARQUEADERO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readParqueadero.php'>";
        }
        else{
            if($parqueaderoCollectorObj->buscarParqueadero($parqueaderoModificado)){
            $mensaje = "ERROR EL PARQUEADERO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditParqueadero.php?id_parqueadero=$id_parqueadero & nombre=$parqueaderoModificado & direccion=$direccion & latitud=$latitud & longitud=$longitud'>";
            }
            else{
                 $parqueaderoCollectorObj->updateParqueadero($id_parqueadero, $parqueaderoModificado, $direccion, $latitud, $longitud);
            $mensaje = "EL PARQUEADERO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readParqueadero.php'>";
            }
        }
        ?>
    </body>
</html>