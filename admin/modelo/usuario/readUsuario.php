<?php
    session_start();
    include_once("UsuarioCollector.php");
    $usuarioCollectorObj = new UsuarioCollector();
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
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
          <span>USUARIO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddUsuario.php" class="btn btn-info">AGREGAR USUARIO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>USUARIO</th>
                <th>PASSWORD</th>
                <th>ROL</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($usuarioCollectorObj->showUsuarios() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_usuario() . "</td>";         
            echo "<td>" . $c->get_usuario() . "</td>"; 
            echo "<td>" . $c->get_password() . "</td>";   
            //echo "<td>" . $c->get_rol() . "</td>";  
            if($c->get_rol() == 'A')
                echo "<td>Administrador</td>";
            else
                echo "<td>Web</td>";       
            echo "<td><a href='form_EditUsuario.php?id_usuario=". $c->get_id_usuario() ." & usuario=". $c->get_usuario() ." & clave=". $c->get_password() . " & rol=". $c->get_rol() ."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteUsuario.php?ID=". $c->get_id_usuario() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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