<?php
session_start();
include_once('validar.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
        $usuarioCollector = new UsuarioCollector();
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];
        if ($usuarioCollector->validarUsuario($usuario,$clave)){
            $_SESSION['mySesion'] = $usuario;
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php'>";
        }
        else{
             $mensaje = "EL USUARIO NO SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>";
        }
	   ?>
            
    </head>
    <body>
	
    </body>
</html>