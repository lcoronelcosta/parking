<?php
    session_start();
    include_once("PropietarioCollector.php");
    $propietarioCollectorObj = new PropietarioCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Propietario</title>
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
          <span>PROPIETARIO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddPropietario.php" class="btn btn-info">AGREGAR PROPIETARIO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>RUC</th>
                <th>NUMERO-CUENTA</th>
                <th>ESTADO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($propietarioCollectorObj->showPropietarios() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_propietario() . "</td>";         
            echo "<td>" . $c->get_nombre() . "</td>"; 
            echo "<td>" . $c->get_apellido() . "</td>";
            echo "<td>" . $c->get_ruc() . "</td>"; 
            echo "<td>" . $c->get_numerocuenta() . "</td>";
            echo "<td>" . $c->get_estado() . "</td>";       
            echo "<td><a href='form_EditPropietario.php?id_propietario=". $c->get_id_propietario() ." & nombre=". $c->get_nombre() ." & apellido=". $c->get_apellido() . " & ruc=". $c->get_ruc() . " & numerocuenta=". $c->get_numerocuenta() . " & estado=". $c->get_estado() . "' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deletePropietario.php?ID=". $c->get_id_propietario() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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