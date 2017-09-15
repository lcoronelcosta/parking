<?php
    session_start();
    include_once("UsuarioCollector.php");
    $id_usuario = $_GET['ID'];
    $usuarioCollectorObj = new UsuarioCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Usuario</title>
    </head>
    <body>
        <?php
        $usuarioCollectorObj->deleteUsuario($id_usuario);
        $mensaje = "EL USUARIO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php'>";
        ?>
    </body>
</html>
