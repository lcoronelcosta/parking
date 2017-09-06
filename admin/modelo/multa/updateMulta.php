<?php
session_start();
include_once("MultaCollector.php");
$id_multa = $_POST['id_multa'];
$descipcion = $_POST['descipcion']
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
        
       
            $multaCollectorObj->updateMulta($id_multa,$descipcion, $valor);
            $mensaje = "EL CLIENTE SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
        ?>
        
    </body>
</html>
