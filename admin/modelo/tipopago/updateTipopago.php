<?php
session_start();
include_once("TipopagoCollector.php");
$id_pago = $_POST['id_pago'];
$tipopagoModificado = $_POST['tipopagoModificado']; 
$estado = $_POST['estado'];
$tipopagoActual = $_GET['descripcion'];
$tipopagoCollectorObj = new TipopagoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update TipoPago</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
            $estadoAux = substr ("$estado", 0,1);
            $tipopagoCollectorObj->updateTipopago($id_pago, $tipopagoModificado, $estadoAux);
            $mensaje = "EL TIPO DE PAGO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        ?>
    </body>
</html>