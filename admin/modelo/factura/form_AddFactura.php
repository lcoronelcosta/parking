<?php
    session_start();
    include_once("FacturaCollector.php");
    $facturaCollectorObj = new FacturaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Factura</title>
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
          <span>Agregar Facturas</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
          <form method="post" action="saveFactura.php">
            <div class="box-body">  

            <div class="form-group">
                <label for="password">RESERVAS <a class="btn btn-info" data-toggle="modal" data-target="#myModalReserva"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_reserva" id="id_r" placeholder="ID">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="n_c" id="n_c" placeholder="NOMBRE CLIENTE">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="a_c" id="a_c" placeholder="APELLIDO CLIENTE">
                </div>
                
            </div>    
                
            <div class="form-group">
                <label for="username">VEHICULO</label>
                <div class="col-md-5">
                    <input readonly type="text" class="form-control" name="d_v" id="d_v" placeholder="DESCRIPCION">
                </div>
                <div class="col-md-5">
                    <input readonly type="text" class="form-control" name="p_v" id="p_v" placeholder="PLACA">
                </div>
            </div>
           <div class="form-group">
                <label for="password">TIPO PAGO <a class="btn btn-info" data-toggle="modal" data-target="#myModalPagos"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="id_pago" id="id_p" placeholder="ID">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="d_pago" id="n_p" placeholder="NOMBRE">
                </div>
                
            </div>  
                
            <div class="form-group">
                <label for="username">TOTAL MULTA</label>
                <input type="text" class="form-control" name="total_multa" id="total" required autofocus readonly>
            </div>
            <div class="form-group">
                <label for="username">TOTAL PAGAR</label>
                <input type="text" class="form-control" name="total_pagar" required autofocus readonly>
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
              <a href="readFactura.php" class="btn btn-info pull-right">Salir</a>       
            </div>
            <div>    
        </form>
        </div>

      </div>

    </div>
  </div>
<?php include_once('../modals/modal_reserva.php');?>
<?php include_once('../modals/modal_pago.php');?>
   </body>
</html>
