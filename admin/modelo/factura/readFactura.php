<?php
    session_start();
    include_once("FacturaCollector.php");
    $facturaCollectorObj = new FacturaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Facturas</title>
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
          <span>FACTURAS</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddFactura.php" class="btn btn-info">AGREGAR FACTURA</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-RESERVA</th>
                <th>ID-PAGO</th>
                <th>FECHA</th>
                <th>T-MULTA</th>
                <th>T_PAGAR</th>
                <th>ESTADO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($facturaCollectorObj->showsFactura() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_factura() . "</td>";         
            echo "<td>" . $c->get_id_reserva() . "</td>";  
            echo "<td>" . $c->get_id_pago() . "</td>";
            echo "<td>" . $c->get_fecha() . "</td>";
            echo "<td>" . $c->get_total_multa() . "</td>";
            echo "<td>" . $c->get_total_pagar() . "</td>";
            echo "<td>" . $c->get_estado() . "</td>";    
            echo "<td><a href='form_EditFactura.php?ID=". $c->get_id_factura() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteFactura.php?ID=". $c->get_id_factura() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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