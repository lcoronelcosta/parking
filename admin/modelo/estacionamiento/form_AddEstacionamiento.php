<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    $estacionamientoCollectorObj = new EstacionamientoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Estacionamiento</title>
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
          <span>AGREGAR ESTACIONAMIENTO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveEstacionamiento.php">
           <div class="form-group">
                <label for="password">PARQUEADERO <a class="btn btn-info" data-toggle="modal" data-target="#myModalParqueos"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="id_parqueadero" id="id_parqueo" placeholder="ID">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="nombre_parqueo" id="nombre_parqueo" placeholder="NOMBRE">
                </div>
                
            </div> 
            <div class="form-group">
                <label for="username">Numero</label>
                <input type="text" class="form-control" name="numero" placeholder="numero" required autofocus>
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
              <a href="readEstacionamiento.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
<?php include_once('../modals/modal_parqueos.php');?>
</html>
