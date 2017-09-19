<?php
session_start();
include_once("UsuarioCollector.php");
$id_usuario = $_POST['id_usuario'];
$usuarioModificado = $_POST['usuarioModificado']; 
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$usuarioActual = $_GET['usuario'];
$usuarioCollectorObj = new UsuarioCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Usuario</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        $rolAux = substr ("$rol", 0,1);
        //if(trim($usuarioActual) == trim($usuarioModificado)){
            $usuarioCollectorObj->updateUsuario($id_usuario, $usuarioModificado, $clave, $rolAux);
            $mensaje = "EL USUARIO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php'>";
        /*}
        else{
            if($usuarioCollectorObj->buscarUsuario($usuarioModificado)){
            $mensaje = "ERROR EL USUARIO YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=form_EditUsuario.php?id_usuario=$id_usuario & usuario=$usuarioModificado & clave=$clave & rol=$rol'>";
            }
            else{
                 $usuarioCollectorObj->updateUsuario($id_usuario, $usuarioModificado, $clave, $roll);
            $mensaje = "EL USUARIO SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readUsuario.php'>";
            }
        }*/
        ?>
    </body>
</html>