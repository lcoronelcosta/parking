<?php
    session_start();
    include_once("VehiculoCollector.php");
    include_once("../cliente/ClienteCollector.php");
    $vehiculoCollectorObj = new VehiculoCollector();

    $id_vehiculo = $_GET['id_vehiculo'];
    $descripcion = $_GET['descripcion'];
    $placa = $_GET['placa'];
    $id_cliente = $_GET['id_cliente'];
    $tipo = $_GET['tipo'];

    $clienteCollectorObj = new ClienteCollector();
    $clienteObj = $clienteCollectorObj->showCliente($id_cliente);

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Vehiculo</title>
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
          <span>EDITAR VEHICULO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateVehiculo.php?descripcion=<?php $descripcion?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" readonly name="id_vehiculo" value="<?php echo "$id_vehiculo"; ?>" required>
            </div>  
            <div class="form-group">
                <label>CLIENTE <a class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_c" id="id_c" value="<?php echo $clienteObj->get_id_cliente(); ?>">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="n_c" id="n_c" value="<?php echo $clienteObj->get_nombre(); ?>">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="a_c" id="a_c" value="<?php echo $clienteObj->get_apellido(); ?>">
                </div>
                
            </div>    
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="vehiculoModificado" required value="<?php echo $descripcion;?>">
            </div>
            <div class="form-group">
                <label for="username">Placa</label>
                <input type="text" class="form-control" name="placa" required value="<?php echo $placa;?>">
            </div>
            <div class="form-group">
              <label for="level">Tipo Vehiculo</label>
                <select class="form-control" name="tipo">
                  <?php
                    if ($tipo == 'M') {
                        echo "<option>Moto</option>";
                        echo "<option>Auto</option>";
                        echo "<option>Camioneta</option>";
                    }
                    elseif ($tipo == 'C') {
                        echo "<option>Camioneta</option>";
                        echo "<option>Moto</option>";
                        echo "<option>Auto</option>";
                    }
                    else{
                        echo "<option>Auto</option>";
                        echo "<option>Moto</option>";
                        echo "<option>Camioneta</option>";
                    }
                  ?>
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
