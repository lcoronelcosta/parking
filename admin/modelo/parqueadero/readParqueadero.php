<?php
    session_start();
    include_once("ParqueaderoCollector.php");
    $parqueaderoCollectorObj = new ParqueaderoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Parqueadero</title>
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
          <span>PARQUEADERO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddParqueadero.php" class="btn btn-info">AGREGAR PARQUEADERO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th> 
                <th>ID-PROPIETARIO</th>   
                <th>DESCRIPCION</th>
                <th>DIRECCION</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($parqueaderoCollectorObj->showParqueaderos() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_parqueadero() . "</td>"; 
            echo "<td>" . $c->get_id_propietario() . "</td>";         
            echo "<td>" . $c->get_nombre() . "</td>";   
            echo "<td>" . $c->get_direccion() . "</td>"; 
            echo "<td>" . $c->get_latitud() . "</td>";  
            echo "<td>" . $c->get_longitud() . "</td>";  
            echo "<td><a href='form_EditParqueadero.php?id_parqueadero=". $c->get_id_parqueadero() ." & id_propietario=". $c->get_id_propietario() . " & nombre=". $c->get_nombre() ." & direccion=". $c->get_direccion() . " & latitud=". $c->get_latitud() ." & longitud=". $c->get_longitud() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteParqueadero.php?ID=". $c->get_id_parqueadero() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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