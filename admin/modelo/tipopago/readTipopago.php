<?php
    session_start();
    include_once("TipopagoCollector.php");
    $tipopagoCollectorObj = new TipopagoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Tipo Pago</title>
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
          <span>TIPO PAGO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddTipopago.php" class="btn btn-info">AGREGAR TIPO PAGO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>DESCRIPCION</th>
                <th>ESTADO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($tipopagoCollectorObj->showTipopago() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_pago() . "</td>";         
            echo "<td>" . $c->get_descripcion() . "</td>";   
            echo "<td>" . $c->get_estado() . "</td>";
            echo "<td><a href='form_EditTipopago.php?id_pago=". $c->get_id_pago() ." & descripcion=". $c->get_descripcion() ." & estado=". $c->get_estado()."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteTipopago.php?ID=". $c->get_id_pago() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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
