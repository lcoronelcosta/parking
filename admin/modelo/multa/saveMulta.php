<?php
    session_start();
    include_once("MultaCollector.php");
    include_once("Multa.php");
	$descipcion = $_POST['descipcion'];
	$valor = $_POST['valor'];
    $multaCollectorObj = new MultaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        //$roll = substr ("$rol", 0,1);
        if($multaCollectorObj->buscarMulta($descipcion, $valor)){
            $mensaje = "ERROR LA MULTA YA SE ENCUENTRA REGISTRADA";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddMulta.php'>";
        }
        else{
        $multaCollectorObj->createMulta($descipcion, $valor);
        $mensaje = "LA MULTA SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
        }
        ?>
  
    </body>
</html>
