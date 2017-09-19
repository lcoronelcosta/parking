<?php
    session_start();
    include_once("MultaReservaCollector.php");
    $multaReservaCollectorObj = new MultaReservaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Multa por Reserva</title>
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
          <span>AGREGAR MULTA POR RESERVA</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveMultaReserva.php">
             <div class="form-group">
                 <label for="password">RESERVAS <a class="btn btn-info" data-toggle="modal" data-target="#myModalReserva" ><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-9">
                    <input readonly type="text" class="form-control" required name="id_reserva" id="id_r" placeholder="ID">
                </div>
            </div>
           <div class="form-group">
                 <label for="password">MULTAS <a class="btn btn-info" data-toggle="modal" data-target="#myModalMultas" ><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-9">
                    <input readonly type="text" class="form-control" required name="id_multa" id="id_multa" placeholder="ID">
                </div>
            </div>
          
            <div class="form-group">
                <label for="username">Valor</label>
                <input type="text" class="form-control" readonly name ="valor"  id="valor" placeholder="valor" required>
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
<?php include_once('../modals/modal_reserva.php');?>
<?php include_once('../modals/modal_multa.php');?>
</html>