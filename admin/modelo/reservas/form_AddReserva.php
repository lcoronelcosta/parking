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
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
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
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveUsuario.php">
            <div class="form-group">
                <label for="username">ID-CLIENTE</label>
                <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">ID-VEHICULO</label>
                <input type="password" class="form-control" name ="clave"  placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <label for="username">ID-PARQUEO</label>
                <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required autofocus>
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
              
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readReserva.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
  <?php include_once('map.php'); ?>       
</body>
</html>
