<?php
    session_start();
    include_once("ParqueaderoCollector.php");
    $parqueaderoCollectorObj = new ParqueaderoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Parqueadero</title>
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
          <span>AGREGAR PARQUEADERO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveParqueadero.php">
          <div class="form-group">
                <label for="password">PROPIETARIO <a class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_pr" id="id_pr" placeholder="ID">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="n_pr" id="n_pr" placeholder="NOMBRE">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="a_pr" id="a_pr" placeholder="APELLIDO">
                </div>
                
            </div>
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre Parqueadero" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Direccion</label>
                <input type="text" class="form-control" name ="direccion"  placeholder="Direccion" required>
            </div>
            <div class="form-group">
                <label for="username">Latitud</label>
                <input type="text" class="form-control" name ="latitud"  placeholder="Latitud" required>
            </div>
            <div class="form-group">
                <label for="username">Longitud</label>
                <input type="text" class="form-control" name ="longitud"  placeholder="Longitud" required>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readParqueadero.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
<?php include_once('../modals/modal_propietario.php');?>
</html>