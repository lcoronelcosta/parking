<?php
    session_start();
    include_once("UsuarioCollector.php");
    $id_usuario = $_GET['ID'];
    $usuarioCollectorObj = new UsuarioCollector();
    if (isset($_SESSION['mySesion'])){
        echo "<p> Bienvenido:(".$_SESSION['mySesion'].")";
    }
  else{
    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>";
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Usuario</title>
    </head>
    <body>

    <?php 
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        $usuarioCollectorObj->deleteUsuario($id_usuario);
        $mensaje = "EL USUARIO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php'>";
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
