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
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        $tipopagoCollectorObj->deleteTipopago($id_pago);
        $mensaje = "EL TIPO DE PAGO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        ?>
    <?php
        }
    
    else {
       // echo "permiso denegado";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
    }
    ?>
    </body>
</html>
