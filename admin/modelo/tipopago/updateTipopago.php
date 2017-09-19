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
    
    </head>
    <body>
    <?php 
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        if(trim($tipopagoActual) == trim($tipopagoModificado)){
            $tipopagoCollectorObj->updateTipopago($id_pago, $tipopagoModificado, $estado);
            $mensaje = "EL TIPO DE PAGO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
        }
        else{
            if($tipopagoCollectorObj->buscarTipopago($tipopagoModificado)){
            $mensaje = "ERROR EL TIPO DE PAGO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditTipopago.php?id_pago=$id_pago & descripcion=$tipopagoModificado & estado=$estado'>";
            }
            else{
                 $tipopagoCollectorObj->updateTipopago($id_pago, $tipopagoModificado, $estado);
            $mensaje = "EL TIPO DE PAGO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readTipopago.php'>";
            }
        }
            $estadoAux = substr ("$estado", 0,1);
            $tipopagoCollectorObj->updateTipopago($id_pago, $tipopagoModificado, $estadoAux);
            $mensaje = "EL TIPO DE PAGO SE MODIFICO EXITOSAMENTE";
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