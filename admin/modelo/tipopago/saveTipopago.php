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
        //$roll = substr ("$rol", 0,1);
        if($tipopagoCollectorObj->buscarTipopago($descripcion)){
            $mensaje = "ERROR EL TIPO DE PAGO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddTipopago.php'>";
        }
        else{
        $tipopagoCollectorObj->createTipopago($descripcion, $estado);
        $mensaje = "EL TIPO DE PAGO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        }
        ?>
  
    </body>
</html>
