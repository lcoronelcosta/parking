<?php
    session_start();
    include_once("TipopagoCollector.php");
    $tipopagoCollectorObj = new TipopagoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Tipo Pago</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>AGREGAR TIPO PAGO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveTipopago.php">
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Efectivo-Credito-Debito" required autofocus>
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
              <a href="readTipopago.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
