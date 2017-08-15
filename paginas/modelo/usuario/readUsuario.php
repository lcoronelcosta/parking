<?php
    include_once("UsuarioCollector.php");
    $usuarioCollectorObj = new UsuarioCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</head>
<body>
    <div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>USUARIOS</span>
       </strong>
         <a href="#" class="btn btn-info pull-right">AGREGAR USUARIO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
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
            echo "<td>" . $c->get_rol() . "</td>";    
            echo "<td><a href='#' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='#' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
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