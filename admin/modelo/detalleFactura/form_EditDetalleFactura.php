<?php
    session_start();
    include_once("DetalleFacturaCollector.php");
    $detalleFacturaCollectorObj = new DetalleFacturaCollector();
    $id_detalle_factura = $_GET['id_detalle_factura'];
    $tiempo = $_GET['tiempo'];
    $total = $_GET['total'];
    $id_factura = $_GET['id_factura'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Detalle Factura</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Editar Detalle Factura</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateDetalleFactura.php?tiempo=<?php $tiempo?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_detalle_facura" required value="<?php echo "$id_detalle_factura"; ?>">
            </div>  
            <div class="form-group">
                <label for="username">TIEMPO</label>
                <input type="text" readonly class="form-control" name="tiempo" required value="<?php echo "$tiempo"; ?>">
            </div>
            <div class="form-group">
                <label for="username">TOTAL</label>
                <input type="text" class="form-control" name ="total" required  value="<?php echo "$total"; ?>">
            </div>
            <div class="form-group">
                <label for="username">ID-FACTURA</label>
                <input type="text" class="form-control" name ="id_factura" required  value="<?php echo "$id_factura"; ?>">
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
