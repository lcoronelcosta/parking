<?php
    session_start();
    include_once("PropietarioCollector.php");
    $propietarioCollectorObj = new PropietarioCollector();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Propietario</title>
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
          <span>AGREGAR PROPIETARIO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="savePropietario.php">
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre Propietario" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido Propietario" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">RUC</label>
                <input type="text" class="form-control" name="ruc" placeholder="RUC propietario" required autofocus>
            </div> 
            <div class="form-group">
                <label for="username">Numero Cuenta</label>
                <input type="text" class="form-control" name="numerocuenta" placeholder="Cuenta Propietario" required autofocus>
            </div> 
            <div class="form-group">
              <label for="level">Estado</label>
                <select class="form-control" name="estado">
                  <option>Activo</option>
                  <option>Inactivo</option>
                </select>
            </div> 
            
            
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readPropietario.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>