<?php
    session_start();
    include_once("VehiculoCollector.php");
    $vehiculoCollectorObj = new VehiculoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Vehiculo</title>
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
          <span>VEHICULO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddVehiculo.php" class="btn btn-info">AGREGAR VEHICULO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>DESCRIPCION</th>
                <th>PLACA</th>
                <th>TIPO</th>
                <th>CLIENTE</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($vehiculoCollectorObj->showVehiculos() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_vehiculo() . "</td>";         
            echo "<td>" . $c->get_descripcion() . "</td>";   
            echo "<td>" . $c->get_placa() . "</td>"; 
            echo "<td>" . $c->get_tipo() . "</td>"; 
            echo "<td>" . $c->get_id_cliente() . "</td>";   
            echo "<td><a href='form_EditVehiculo.php?id_vehiculo=". $c->get_id_vehiculo() ." & descripcion=". $c->get_descripcion() ." & placa=". $c->get_placa() . " & id_cliente=". $c->get_id_cliente() ." & tipo=".$c->get_tipo()."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteVehiculo.php?ID=". $c->get_id_vehiculo() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
