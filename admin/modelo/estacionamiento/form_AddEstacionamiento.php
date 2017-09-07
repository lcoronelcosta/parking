<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    $estacionamientoCollectorObj = new EstacionamientoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Estacionamiento</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar Estacionamiento</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveEstacionamiento.php">
            <div class="form-group">
                <label for="username">Parqueadero</label>
                <input type="text" class="form-control" name="id_cliente" placeholder="Id Cliente" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Numero</label>
                <input type="text" class="form-control" name="numero" placeholder="numero" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="estado" required autofocus>
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
<?php 

    include_once("../../modal_exito.php");
?>
