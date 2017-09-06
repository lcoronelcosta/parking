<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    include_once("Estacionamiento.php");
    $estacionamientoCollectorObj = new EstacionamientoCollector();
    $id_estacionamiento = $_GET['id_estacionamiento'];
    $estacionamiento = $estacionamientoCollectorObj->showEstacionamiento($id_estacionamiento);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Estacionamiento</title>
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
          <span>Editar Parqueadero</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateEstacionamiento.php?nombre=<?php $nombre?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_estacionamiento" readonly='readonly' required value=<?php echo $estacionamiento->get_id_estacionamiento(); ?>>
            </div>  
            <div class="form-group">
                <label for="username">PARQUEADERO</label>
                <input type="text" class="form-control" name="id_parqueadero" readonly='readonly' required value=<?php echo $parqueadero->get_id_parqueadero(); ?>>
            </div>
            <div class="form-group">
                <label for="username">Numero</label>
                <input type="text" class="form-control" name ="numero" required  value=<?php echo $estacionamiento->get_numero(); ?>>
            </div>
            <div class="form-group">
                <label for="username">Estado</label>
                <input type="text" class="form-control" name ="estado" required  value=<?php echo $estacionamiento->get_estado(); ?>>
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
</html>
