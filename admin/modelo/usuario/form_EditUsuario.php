<?php
    session_start();
    include_once("UsuarioCollector.php");
    $usuarioCollectorObj = new UsuarioCollector();
    $id_usuario = $_GET['id_usuario'];
    $usuario = $_GET['usuario'];
    $clave = $_GET['clave'];
    $rol = $_GET['rol'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Usuario</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Editar usuario</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateUsuario.php?usuario=<?php $usuario?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" readonly class="form-control" name="id_usuario" required value=<?php echo "$id_usuario"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="usuarioModificado" required value="<?php echo $usuario; ?>">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name ="clave" required  value="<?php echo $clave; ?>">
            </div>
            <div class="form-group">
              <label for="level">Rol de usuario</label>
                <select class="form-control" name="rol">
                  <?php 
                    if ($rol == 'A'){
                        echo "<option >Administrador</option>";
                        echo "<option>Web</option>";
                    }
                    else{
                        echo "<option>Web</option>";
                        echo "<option >Administrador</option>";
                    }
                    
                  ?>    
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readUsuario.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>