<?php
    session_start();
    include_once("FacturaCollector.php");
    include_once("../reservas/ReservaCollector.php");
    include_once("../vehiculo/VehiculoCollector.php");
    include_once("../cliente/ClienteCollector.php");
    include_once("../tipopago/TipopagoCollector.php");

    $facturaCollectorObj = new FacturaCollector();
    $reservaCollectorObj = new ReservaCollector();
    $vehiculoCollectorObj = new VehiculoCollector();
    $clienteCollectorObj = new ClienteCollector();
    $pagoCollectorObj = new TipopagoCollector();

    $id_factura = $_GET['ID'];


    $facturaObj = $facturaCollectorObj->showFactura($id_factura);
    $reservaObj = $reservaCollectorObj->showReserva($facturaObj->get_id_reserva());
    $vehiculoObj = $vehiculoCollectorObj->showVehiculo($reservaObj->get_id_vehiculo());
    $clienteObj = $clienteCollectorObj->showCliente($reservaObj->get_id_cliente());
    $pagoObj = $pagoCollectorObj->showTipopagoU($facturaObj->get_id_pago());
    

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
          <form method="post" action="updateFactura.php">
            <div class="box-body">

            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" readonly class="form-control" name="id_factura" required value=<?php echo "$id_factura"; ?>>
            </div>    

            <div class="form-group">
                <label for="password">RESERVAS <a class="btn btn-info" data-toggle="modal" data-target="#myModalReserva"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_reserva" id="id_r" value=<?php echo $reservaObj->get_id_reserva(); ?>>
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="n_c" id="n_c" value="<?php echo $clienteObj->get_nombre(); ?>">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="a_c" id="a_c" value="<?php echo $clienteObj->get_nombre(); ?>">
                </div>
                
            </div>    
                
            <div class="form-group">
                <label for="username">VEHICULO</label>
                <div class="col-md-5">
                    <input readonly type="text" class="form-control" name="d_v" id="d_v" value="<?php echo $vehiculoObj->get_descripcion(); ?>">
                </div>
                <div class="col-md-5">
                    <input readonly type="text" class="form-control" name="p_v" id="p_v" value="<?php echo $vehiculoObj->get_placa(); ?>">
                </div>
            </div>
           <div class="form-group">
                <label for="password">TIPO PAGO <a class="btn btn-info" data-toggle="modal" data-target="#myModalPagos"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="id_pago" id="id_p" value="<?php echo $pagoObj->get_id_pago(); ?>">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="d_pago" id="n_p" value="<?php echo $pagoObj->get_descripcion(); ?>">
                </div>
                
            </div>  
                
            <div class="form-group">
                <label for="username">TOTAL MULTA</label>
                <input type="text" class="form-control" name="total_multa" required autofocus readonly value=<?php echo $facturaObj->get_total_multa(); ?>>
            <div class="form-group">
                <label for="username">TOTAL PAGAR</label>
                <input type="text" class="form-control" name="total_pagar" required autofocus readonly value=<?php echo $facturaObj->get_total_pagar(); ?>>

            </div> 
            <div class="form-group">
                <label for="username">FECHA</label>
                <input type="datetime-local" class="form-control" name="fecha" required autofocus readonly value="<?php echo $facturaObj->get_fecha(); ?>">

            </div> 
            <div class="form-group">
              <label for="level">Estado</label>
                <select class="form-control" name="estado">
                  <?php 
                    if ($facturaObj->ge_estado == 'A'){
                        echo "<option >Activo</option>";
                        echo "<option>Inactivo</option>";
                    }
                    else{
                        echo "<option>Inactivo</option>";
                        echo "<option >Activo</option>";
                    }
                    
                  ?>    
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
