<?php
    session_start();
    include_once("ClienteCollector.php");
    $id_cliente = $_GET['ID'];
    $id_user = $_GET['ID_user'];
    $clienteCollectorObj = new ClienteCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Cliente</title>
    </head>
    <body>
        <?php
        $clienteCollectorObj->deleteCliente($id_cliente, $id_user);
        $mensaje = "EL CLIENTE SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readCliente.php'>";
        ?>
    </body>
</html>
