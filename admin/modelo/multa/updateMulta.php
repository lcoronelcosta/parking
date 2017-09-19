<?php
session_start();
include_once("MultaCollector.php");
$id_multa = $_POST['id_multa'];
$multaModificado = $_POST['multaModificado']; 
$valor = $_POST['valor'];
$multaActual = $_GET['descipcion'];
$multaCollectorObj = new MultaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
    <?php 
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
            $multaCollectorObj->updateMulta($id_multa, $multaModificado, $valor);
            $mensaje = "LA MULTA SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
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
