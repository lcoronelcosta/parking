<?php
    session_start();
    include_once("MultaCollector.php");
    $multaCollectorObj = new MultaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Multa</title>
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
          <span>AGREGAR MULTA</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveMulta.php">
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="descipcion" placeholder="motivos" required autofocus>
            </div>
                <div class="form-group">
                <label for="username">Valor</label>
                <input type="text" class="form-control" name="valor" placeholder="valor" required autofocus>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readMulta.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
