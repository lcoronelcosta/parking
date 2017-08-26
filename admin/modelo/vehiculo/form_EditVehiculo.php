<?php
    session_start();
    include_once("VehiculoCollector.php");
    $vehiculoCollectorObj = new VehiculoCollector();
    $id_vehiculo = $_GET['id_vehiculo'];
    $descripcion = $_GET['descripcion'];
    $placa = $_GET['placa'];
    $tipo = $_GET['tipo'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Vehiculo</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php include_once('../../header.php'); ?> 
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Editar Vehiculo</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateVehiculo.php?descripcion=<?php $descripcion?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_vehiculo" required value=<?php echo "$id_vehiculo"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="vehiculoModificado" required value=<?php echo "$descripcion"; ?>>
            </div>
            <div class="form-group">
                <label for="username">Placa</label>
                <input type="text" class="form-control" name="placa" required value=<?php echo "$placa"; ?>>
            </div>
            <div class="form-group">
                <label for="username">Tipo</label>
                <input type="text" class="form-control" name="tipo" required value=<?php echo "$tipo"; ?>>
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
</html>
<?php 

    include_once("../../modal_exito.php");
?>
