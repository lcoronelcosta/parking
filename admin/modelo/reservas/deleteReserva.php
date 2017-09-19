<?php
    session_start();
    include_once("ReservaCollector.php");
    $id_reserva = $_GET['ID'];
    $reservaCollectorObj = new ReservaCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Reserva</title>
    </head>
    <body>
    <?php 
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        $reservaCollectorObj->deleteReserva($id_reserva);
        $mensaje = "LA RESERVA SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=ReadReserva.php'>";
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