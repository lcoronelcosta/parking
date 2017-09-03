<?php
    session_start();
    include_once("DetFacturaCollector.php");
    $detFacturaCollectorObj = new DetFacturaCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Detalle Factura</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
    
  <?php include_once('../../header.php'); ?> 
  <div class="row">    
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Detalle</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddDetFactura.php" class="btn btn-info">AGREGAR DETALLE</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-FACTURA</th>
                <th>TIEMPO</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <?php
            foreach ($clienteCollectorObj->showDetFactura() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_detalle_facura() . "</td>";         
            echo "<td>" . $c->get_id_factura() . "</td>";   
            echo "<td>" . $c->get_tiempo() . "</td>"; 
            echo "<td>" . $c->get_total() . "</td>";    
            echo "<td><a href='form_EditDetFactura.php?id_detalle_facura=". $c->get_id_detalle_facura() ." & id_facura=". $c->get_id_factura() ." & tiempo=". $c->get_tiempo() ." & total=". $c->get_total() . "' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteDetFactura.php?ID=". $c->get_id_detalle_facura() ." & ID_FACTURA=". $c->get_id_factura() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
