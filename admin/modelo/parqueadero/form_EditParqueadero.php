<?php
    session_start();
    include_once("ParqueaderoCollector.php");
    $parqueaderoCollectorObj = new ParqueaderoCollector();
    $id_parqueadero = $_GET['id_parqueadero'];
    $nombre = $_GET['nombre'];
    $direccion = $_GET['direccion'];
    $latitud = $_GET['latitud'];
    $longitud = $_GET['longitud'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Parqueadero</title>
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
          <form method="post" action="updateParqueadero.php?nombre=<?php $nombre?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_parqueadero" required value=<?php echo "$id_parqueadero"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="parqueaderoModificado" required value=<?php echo "$nombre"; ?>>
            </div>
            <div class="form-group">
                <label for="username">Direccion</label>
                <input type="text" class="form-control" name="direccion" required value=<?php echo "$direccion"; ?>>
            </div>
            <div class="form-group">
                <label for="username">Latitud</label>
                <input type="text" class="form-control" name="latitud" required value=<?php echo "$latitud"; ?>>
            </div>
            <div class="form-group">
                <label for="username">Longitud</label>
                <input type="text" class="form-control" name="longitud" required value=<?php echo "$longitud"; ?>>
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
</html>
