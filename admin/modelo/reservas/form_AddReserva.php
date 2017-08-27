<?php
    session_start();
    include_once("ReservaCollector.php");
    $reservaCollectorObj = new ReservaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Reserva</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar reserva</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
          <form method="post" action="saveReserva.php">
            <div class="box-body">  

            <div class="form-group">
                <label for="password">CLIENTE <a class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="id_c" placeholder="ID">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="n_c" placeholder="NOMBRE">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="a_c" placeholder="APELLIDO">
                </div>
                
            </div>    
                
            <div class="form-group">
                 <label for="password">VEHICULO <a class="btn btn-info" disabled data-toggle="modal" data-target="#myModalVehiculo" ><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="id_v" placeholder="ID">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="d_v" placeholder="DESCRIPCION">
                </div>
                <div class="col-md-3">
                    <input readonly type="text" class="form-control" id="p_v" placeholder="PLACA">
                </div>
            </div>
            <div class="form-group">
                <label for="username">FECHA INICIO</label>
                <input type="date" class="form-control" name="fecha_ini" placeholder="Nombre de usuario" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">FECHA FIN</label>
                <input type="date" class="form-control" name="fecha_fin" placeholder="Nombre de usuario" required autofocus>
            </div> 
            <div class="form-group">
                <label for="username">ORIGEN LATITUD</label>
                <input id="origen_la" type="text" class="form-control" name="origen_la" required autofocus readonly>
            </div>
            <div class="form-group">
                <label for="username">ORIGEN LONGITUD</label>
                <input id="origen_lo" type="text" class="form-control" name="origen_lo" required autofocus readonly>
            </div>    
             <div class="form-group">
                <label for="username">DESTINO LATITUD</label>
                <input id="destino_la" type="text" class="form-control" name="destino_la" required autofocus readonly>
            </div>
            <div class="form-group">
                <label for="username">DESTINO LONGITUD</label>
                <input id="destino_lo" type="text" class="form-control" name="destino_lo" required autofocus readonly>
            </div>
                
            <div class="form-group">
                <label for="username">PARQUEO</label>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" id="id_p" placeholder="ID">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" id="d_p" placeholder="DESCRIPCION">
                </div>
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
<?php include_once('modal_clientes.php');?>
<?php include_once('modal_vehiculo.php');?>       
<?php include_once('map.php');?>
   </body>
</html>
