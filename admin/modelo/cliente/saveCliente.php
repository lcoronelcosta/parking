<?php
    session_start();
    include_once("ClienteCollector.php");
    include_once("Cliente.php");
    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $ClienteCollectorObj = new ClienteCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $roll = substr ("$rol", 0,1);
        if($ClienteCollectorObj->buscarUsuario($usuario)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddCliente.php'>";
        }
        else{
        $ClienteCollectorObj->createCliente($nombre, $apellido, $usuario, $clave, $rol);
        $mensaje = "EL CLIENTE SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readCliente.php'>";
        }
        ?>
  
    </body>
</html>
