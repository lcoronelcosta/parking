<?php
    session_start();
    include_once("DetalleFacturaCollector.php");
    $detalleFacturaCollectorObj = new DetalleFacturaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Detalle Factura</title>
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
          <span>Agregar Detalle Factura</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveDetalleFactura.php">
            <div class="form-group">
                <label for="username">Tiempo</label>
                <input type="text" class="form-control" name="tiempo" placeholder="tiempo" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Total</label>
                <input type="text" class="form-control" name ="total"  placeholder="total" required>
            </div>
            <div class="form-group">
                <label for="username">Id Factura</label>
                <input type="text" class="form-control" name ="id_factura"  placeholder="id factura" required>
            </div>

              <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readDetalleFactura.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
