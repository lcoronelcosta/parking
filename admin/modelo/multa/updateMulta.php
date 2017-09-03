<?php
session_start();
include_once("MultaCollector.php");
$id_multa = $_POST['id_multa'];
$multaModificado = $_POST['multaModificado']; 

$multaActual = $_GET['descripcion'];
$multaCollectorObj = new MultaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        //$roll = substr ("$rol", 0,1);
        if(trim($multaActual) == trim($multaModificado)){
            $multaCollectorObj->updateMulta($id_multa, $multaModificado);
            $mensaje = "LA MULTA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
        }
        else{
            if($multaCollectorObj->buscarMulta($multaModificado)){
            $mensaje = "ERROR LA MULTA YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditMulta.php?id_multa=$id_multa & descripcion=$multaModificado'>";
            }
            else{
                 $multaCollectorObj->updateMulta($id_multa, $multaModificado);
            $mensaje = "LA MULTA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
            }
        }
        ?>
    </body>
</html>
