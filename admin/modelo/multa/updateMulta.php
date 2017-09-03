<?php
session_start();
include_once("MultaCollector.php");
$id_multa = $_POST['id_multa'];
$descipcion = $_POST['descipcion']; 
$valor = $_POST['valor'];
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
            $multaCollectorObj->updateMulta($id_multa, $descipcion, $valor);
            $mensaje = "LA MULTA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
        }
        else{
            if($multaCollectorObj->buscarMulta($descipcion, $valor)){
            $mensaje = "ERROR LA MULTA YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditMulta.php?id_multa=$id_multa & descipcion=$descipcion & valor=$valor'>";
            }
            else{
                 $multaCollectorObj->updateMulta($id_multa, $descipcion, $valor);
            $mensaje = "LA MULTA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
            }
        }
        ?>
    </body>
</html>
