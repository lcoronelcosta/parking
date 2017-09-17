<?php
    session_start();
    include_once("ReservaCollector.php");
    $reservaCollectorObj = new ReservaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Reservas</title>
  <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php require('../header.php');?>  
  <div class="row">    
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>RESERVAS</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddReserva.php" class="btn btn-info">AGREGAR RESERVA</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-CLIENTE</th>
                <th>ID-VEHICULO</th>
                <th>ID-PARQUEO</th>
                <th>ID-ESTACIONAMIENTO</th>
                <th>F-INICIO</th>
                <th>F-FIN</th>
                <th>O-LAT</th>
                <th>O-LON</th>
                <th>FACTURADA</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($reservaCollectorObj->showReservas() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_reserva() . "</td>";         
            echo "<td>" . $c->get_id_cliente() . "</td>";   
            echo "<td>" . $c->get_id_vehiculo() . "</td>"; 
            echo "<td>" . $c->get_id_parqueo() . "</td>";
            echo "<td>" . $c->get_id_estacionamiento() . "</td>";
            echo "<td>" . $c->get_fecha_inicio() . "</td>";         
            echo "<td>" . $c->get_fecha_fin() . "</td>";   
            echo "<td>" . $c->get_origen_latitud() . "</td>"; 
            echo "<td>" . $c->get_origen_longitud() . "</td>";
            echo "<td>" . $c->get_facturada() . "</td>";     
            echo "<td><a href='form_EditReserva.php?id_reserva=". $c->get_id_reserva() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteReserva.php?ID=". $c->get_id_reserva() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
                </a></td>"; 
            echo "</tr>"; 
            }
        ?>
    </table>
    </div>
    </div>
  </div>
</div>  
</body>
</html>