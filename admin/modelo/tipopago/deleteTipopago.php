<?php
    session_start();
    include_once("TipopagoCollector.php");
    $id_pago = $_GET['ID'];
    $tipopagoCollectorObj = new TipopagoCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete TipoPago</title>
    </head>
    <body>
        <?php
        $tipopagoCollectorObj->deleteTipopago($id_pago);
        $mensaje = "EL TIPO DE PAGO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        ?>
    </body>
</html>
