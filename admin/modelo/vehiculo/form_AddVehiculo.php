<?php
    session_start();
    include_once("VehiculoCollector.php");
    $vehiculoCollectorObj = new VehiculoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Vehiculo</title>
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
          <span>AGREGAR VEHICULO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveVehiculo.php">
             <div class="form-group">
                <label for="password">CLIENTE <a class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="id_c" id="id_c" placeholder="ID" required>
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="n_c" id="n_c" placeholder="NOMBRE">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="a_c" id="a_c" placeholder="APELLIDO">
                </div>
                
            </div>    
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Marca Modelo Vehiculo" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Placa</label>
                <input type="text" class="form-control" name ="placa"  placeholder="Placa Vehiculo" required>
            </div>
            <div class="form-group">
              <label for="level">Tipo</label>
                <select class="form-control" name="tipo">
                  <option>Camioneta</option>
                  <option>Auto</option>
                  <option>Moto</option>
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readVehiculo.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
<?php include_once('../modals/modal_clientes.php');?>
</html>
