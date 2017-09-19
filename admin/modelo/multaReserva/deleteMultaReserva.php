<?php
    session_start();
    include_once("MultaReservaCollector.php");
    $id_multa_x_factura = $_GET['ID'];
    $multaReservaCollectorObj = new MultaReservaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        $multaReservaCollectorObj->deleteMultaReserva($id_multa_x_factura);
        $mensaje = "LA MULTA POR RESERVA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMultaReserva.php'>";
        ?>
    </body>
</html>
