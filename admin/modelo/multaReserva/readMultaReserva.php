<?php
    session_start();
    include_once("MultaReservaCollector.php");
    $multaReservaCollectorObj = new MultaReservaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Multa por Reserva</title>
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
          <span>MULTA POR RESERVA</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddMultaReserva.php" class="btn btn-info">AGREGAR MULTA POR RESERVA</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-MULTA</th>
                <th>ID-RESERVA</th>
                <th>VALOR</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($multaReservaCollectorObj->showMultaReservas() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_multa_x_factura() . "</td>";         
            echo "<td>" . $c->get_id_multa() . "</td>";   
            echo "<td>" . $c->get_id_reserva() . "</td>"; 
            echo "<td>" . $c->get_valor() . "</td>";    
            echo "<td><a href='form_EditMultaReserva.php?id_multa_x_factura=". $c->get_id_multa_x_factura() ." & id_multa=". $c->get_id_multa() ." & id_reserva=". $c->get_id_reserva() ." & valor=". $c->get_valor() . "' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
               </a> <a href='deleteMultaReserva.php?ID=". $c->get_id_multa_x_factura() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
