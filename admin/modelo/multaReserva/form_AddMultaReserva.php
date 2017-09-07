<?php
    session_start();
    include_once("MultaReservaCollector.php");
    $multaReservaCollectorObj = new MultaReservaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Multa por Reserva</title>
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
          <span>Agregar Multa por Reserva</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveMultaReserva.php">
            <div class="form-group">
                <label for="username">Multa</label>
                <input type="text" class="form-control" name="id_multa" placeholder="id multa" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Reserva</label>
                <input type="text" class="form-control" name ="id_reserva"  placeholder="id reserva" required>
            </div>
            <div class="form-group">
                <label for="username">Valor</label>
                <input type="text" class="form-control" name ="valor"  placeholder="valor" required>
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