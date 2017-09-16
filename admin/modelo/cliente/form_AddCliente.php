<?php
    session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Cliente</title>
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
          <span>AGREGAR CLIENTE</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveCliente.php">
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required autofocus>
            </div>  
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name ="clave"  placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <label for="level">Rol de usuario</label>
                <select class="form-control" name="rol">
                  <option>Administrador</option>
                  <option>Web</option>
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readCliente.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>