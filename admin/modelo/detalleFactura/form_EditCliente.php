<?php
    session_start();
    include_once("DetFacturaCollector.php");
    include_once("DetFactura.php");
    $detFacturaCollectorObj = new detFacturaCollector();
    $$id_detalle_facura = $_GET['id_detalle_facura'];
    $detFactura = $detFacturaCollectorObj->showCliente($id_detalle_facura);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Detalle Factura</title>
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
          <span>Editar Factura</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateDetFactura.php?usuario=<?php $usuario?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_detalle_facura" readonly='readonly' required value=<?php echo $cliente->get_id_detalle_facura(); ?>>
            </div>  
            <div class="form-group">
                <label for="username">Factura</label>
                <input type="text" class="form-control" name="id_factura" readonly='readonly' required value=<?php echo $cliente->get_id_factura(); ?>>
            </div>
            <div class="form-group">
                <label for="username">Tiempo</label>
                <input type="text" class="form-control" name ="tiempo" required  value=<?php echo $cliente->get_tiempo(); ?>>
            </div>
            <div class="form-group">
                <label for="username">Total</label>
                <input type="text" class="form-control" name ="total" required  value=<?php echo $cliente->get_total(); ?>>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readDetFactura.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
