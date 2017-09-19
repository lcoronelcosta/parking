<?php
    session_start();
    include_once("MultaCollector.php");
    $id_multa = $_GET['ID'];
    $multaCollectorObj = new MultaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Multa</title>
    </head>
    <body>
        <?php
        $multaCollectorObj->deleteMulta($id_multa);
        $mensaje = "LA MULTA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMulta.php'>";
        ?>
    </body>
</html>
