<?php
    session_start();
    include_once("../reservas/ReservaCollector.php");
    include_once("../cliente/ClienteCollector.php");
    include_once("../parqueadero/ParqueaderoCollector.php");
    include_once("../vehiculo/VehiculoCollector.php");
    include_once("../estacionamiento/EstacionamientoCollector.php");

    $id_reserva = $_GET['id_reserva'];
    
    $reservaCollectorObj = new ReservaCollector();
    $clienteCollectorObj = new ClienteCollector();
    $parqueoCollectorObj = new ParqueaderoCollector();
    $vehiculoCollectorObj = new VehiculoCollector();
    $estacionamientoCollectorObj = new EstacionamientoCollector();

    $reservaObj = $reservaCollectorObj->showReserva($id_reserva);
    $clienteObj = $clienteCollectorObj->showCliente($reservaObj->get_id_cliente());
    $parqueoObj = $parqueoCollectorObj->showParqueadero($reservaObj->get_id_parqueo());
    $vehiculoObj = $vehiculoCollectorObj->showVehiculo($reservaObj->get_id_vehiculo());
    $estacionamientoObj = $estacionamientoCollectorObj->showEstacionamiento($reservaObj->get_id_estacionamiento()); 

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Reserva</title>
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
          <span>Editar reserva</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
          <form method="post" action="updateReserva.php">
            <div class="box-body">  
                
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_reserva" readonly='readonly' required value=<?php echo $reservaObj->get_id_reserva(); ?>>
            </div>    

            <div class="form-group">
                <label for="password">CLIENTE <a class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_c" id="id_c" placeholder="ID" value=<?php echo $clienteObj->get_id_cliente(); ?>>
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="n_c" id="n_c" placeholder="NOMBRE" value="<?php echo $clienteObj->get_nombre(); ?>">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="a_c" id="a_c" placeholder="APELLIDO" value="<?php echo $clienteObj->get_apellido(); ?>">
                </div>
                
            </div>    
                
            <div class="form-group">
                 <label for="password">VEHICULO <a class="btn btn-info" disabled data-toggle="modal" data-target="#myModalVehiculo" ><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" required name="id_v" id="id_v" placeholder="ID" value=<?php echo $vehiculoObj->get_id_vehiculo(); ?>>
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="d_v" id="d_v" placeholder="DESCRIPCION" value="<?php echo $vehiculoObj->get_descripcion(); ?>">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" name="p_v" id="p_v" placeholder="PLACA">
                </div>
            </div>
            <div class="form-group">
                <label for="username">FECHA INICIO</label>
                <input type="datetime-local" class="form-control" name="fecha_ini" placeholder="Nombre de usuario" required autofocus value="<?php echo $reservaObj->get_fecha_inicio(); ?>">
            </div>
            <div class="form-group">
                <label for="username">FECHA FIN</label>
                <input type="datetime-local" class="form-control" name="fecha_fin" placeholder="Nombre de usuario" required autofocus value="<?php echo $reservaObj->get_fecha_fin(); ?>">
            </div> 
            <div class="form-group">
                <label for="username">ORIGEN LATITUD</label>
                <input id="origen_la" type="text" class="form-control" name="origen_la" required autofocus readonly value="<?php echo $reservaObj->get_origen_latitud(); ?>">
            </div>
            <div class="form-group">
                <label for="username">ORIGEN LONGITUD</label>
                <input id="origen_lo" type="text" class="form-control" name="origen_lo" required autofocus readonly value="<?php echo $reservaObj->get_origen_longitud(); ?>">
            </div>    
             <div class="form-group">
                <label for="username">DESTINO LATITUD</label>
                <input id="destino_la" type="text" class="form-control" name="destino_la" required autofocus readonly value=<?php echo $parqueoObj->get_latitud(); ?>>
            </div>
            <div class="form-group">
                <label for="username">DESTINO LONGITUD</label>
                <input id="destino_lo" type="text" class="form-control" name="destino_lo" required autofocus readonly value="<?php echo $parqueoObj->get_longitud(); ?>">
            </div>
                
            <div class="form-group">
                <label for="username">PARQUEO</label>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="id_p" id="id_p" required placeholder="ID" value="<?php echo $parqueoObj->get_id_parqueadero(); ?>">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="d_p" id="d_p" placeholder="DESCRIPCION" value="<?php echo $parqueoObj->get_nombre(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="password">ESTACIONAMIENTO<a class="btn btn-info" data-toggle="modal" data-target="#myModalEstacionamiento"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="id_e" id="id_e" value="<?php echo $estacionamientoObj->get_id_estacionamiento(); ?>">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="e_n" id="e_n" value="<?php echo $estacionamientoObj->get_numero(); ?>">
                </div>
            </div> 
             <div class="form-group">
              <label for="level">Facturada</label>
                <select class="form-control" name="facturada">
                  <?php 
                    if ($reservaObj->get_facturada() == 'S'){
                        echo "<option >SI</option>";
                        echo "<option>NO</option>";
                    }
                    else{
                        echo "<option>NO</option>";
                        echo "<option >SI</option>";
                    }
                    
                  ?>    
                </select>
            </div>        
              
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readReserva.php" class="btn btn-info pull-right">Salir</a>       
            </div>
            <div>    
        </form>
        </div>

      </div>

    </div>
  </div>
<?php include_once('../modals/modal_clientes.php');?>
<?php include_once('../modals/modal_vehiculo.php');?>
<?php include_once('../modals/modal_estacionamiento.php');?>      
<?php include_once('map.php');?>
   </body>
</html>
