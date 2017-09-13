<?php
    session_start();
    include_once("TipopagoCollector.php");
    include_once("Tipopago.php");
	$descripcion = $_POST['descripcion'];
	$estado = $_POST['estado'];
    $tipopagoCollectorObj = new TipopagoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $estadoAux = substr ("$estado", 0,1);
        $tipopagoCollectorObj->createTipopago($descripcion, $estadoAux);
        $mensaje = "EL TIPO DE PAGO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        ?>
  
    </body>
</html>
