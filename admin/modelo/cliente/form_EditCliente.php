<?php
    session_start();
    include_once("ClienteCollector.php");
    include_once("Cliente.php");
    $clienteCollectorObj = new ClienteCollector();
    $id_cliente = $_GET['id_cliente'];
    $cliente = $clienteCollectorObj->showCliente($id_cliente);
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Editar Cliente</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Editar usuario</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateCliente.php?usuario=<?php $usuario?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_cliente" readonly='readonly' required value="<?php echo $cliente->get_id_cliente(); ?>">
            </div>  
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="id_usuario" readonly='readonly' required value="<?php echo $cliente->get_id_usuario(); ?>">
            </div>
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name ="nombre" required  value="<?php echo $cliente->get_nombre(); ?>">
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name ="apellido" required  value="<?php echo $cliente->get_apellido(); ?>">
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readCliente.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>