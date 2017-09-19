<?php
    session_start();
    include_once("UsuarioCollector.php");
    include_once("Usuario.php");
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $UsuarioCollectorObj = new UsuarioCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php 
        if (isset($_SESSION['mySesion'])){
    ?>
        <?php
        $roll = substr ("$rol", 0,1);
        if($UsuarioCollectorObj->buscarUsuario($usuario)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_AddUsuario.php'>";
        }
        else{
        $UsuarioCollectorObj->createUsuario($usuario, $clave, $rol);
        $mensaje = "EL USUARIO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php'>";
        }
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