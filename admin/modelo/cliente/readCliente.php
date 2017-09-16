<?php
    session_start();
    include_once("ClienteCollector.php");
    $clienteCollectorObj = new ClienteCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
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
          <span>CLIENTE</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddCliente.php" class="btn btn-info">AGREGAR CLIENTE</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-USUARIO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($clienteCollectorObj->showClientes() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_cliente() . "</td>";         
            echo "<td>" . $c->get_id_usuario() . "</td>";   
            echo "<td>" . $c->get_nombre() . "</td>"; 
            echo "<td>" . $c->get_apellido() . "</td>";    
            echo "<td><a href='form_EditCliente.php?id_cliente=". $c->get_id_cliente() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteCliente.php?ID=". $c->get_id_cliente() ." &  ID_user=". $c->get_id_usuario() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
