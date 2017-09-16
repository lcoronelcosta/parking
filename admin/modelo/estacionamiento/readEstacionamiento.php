<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    $estacionamientoCollectorObj = new EstacionamientoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Estacionamiento</title>
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
          <span>ESTACIONAMIENTO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddEstacionamiento.php" class="btn btn-info">AGREGAR ESTACIONAMIENTO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr> 
                <th>ID</th>
                <th>ID-PARQUEADERO</th>
                <th>NUMERO</th>
                <th>ESTADO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($estacionamientoCollectorObj->showEstacionamientos() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_estacionamiento() . "</td>";
            echo "<td>" . $c->get_id_parqueadero() . "</td>";           
            echo "<td>" . $c->get_numero() . "</td>";
            echo "<td>" . $c->get_estado() . "</td>";     
            echo "<td><a href='form_EditEstacionamiento.php?id_estacionamiento=". $c->get_id_estacionamiento() ." & id_parqueadero=". $c->get_id_parqueadero() . " & numero=". $c->get_numero() . " & estado=". $c->get_estado() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteEstacionamiento.php?ID=". $c->get_id_estacionamiento() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
