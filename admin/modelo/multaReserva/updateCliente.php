<?php
session_start();
include_once("ClienteCollector.php");
$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$clienteCollectorObj = new ClienteCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Cliente</title>
    </head>
    <body>
        <?php
       
            $clienteCollectorObj->updateCliente($id_cliente,$nombre, $apellido);
            $mensaje = "EL CLIENTE SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readCliente.php'>";
        ?>
    </body>
</html>