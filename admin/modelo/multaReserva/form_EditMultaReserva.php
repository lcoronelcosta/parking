<?php
    session_start();
    include_once("MultaReservaCollector.php");
    $multaReservaCollectorObj = new MultaReservaCollector();
    $id_multa_x_factura = $_GET['id_multa_x_factura'];
    $id_multa = $_GET['id_multa'];
    $id_reserva = $_GET['id_reserva'];
    $valor = $_GET['valor'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Multa por Reserva</title>
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
          <span>Editar Multa por Reserva</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateMultaReserva.php">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_multa_x_factura" readonly='readonly' required value=<?php echo $id_multa_x_factura->get_id_multa_x_factura(); ?>>
            </div>  
            <div class="form-group">
                <label for="username">ID-MULTA</label>
                <input type="text" class="form-control" name="id_multa" readonly='readonly' required value=<?php echo $id_multa->get_id_multa(); ?>>
            </div>
            <div class="form-group">
                <label for="username">ID-RESERVA</label>
                <input type="text" class="form-control" name ="id_reserva" required  value=<?php echo $id_reserva->get_id_reserva(); ?>>
            </div>
            <div class="form-group">
                <label for="username">VALOR</label>
                <input type="text" class="form-control" name ="valor" required  value=<?php echo $valor->get_valor(); ?>>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readMultaReserva.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
