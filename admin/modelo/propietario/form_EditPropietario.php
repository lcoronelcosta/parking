<?php
    session_start();
    include_once("PropietarioCollector.php");
    include_once("Propietario.php");
    $propietarioCollectorObj = new PropietarioCollector();
    $id_propietario = $_GET['id_propietario'];
    $nombre = $propietarioCollectorObj->showPropietario($id_propietario);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Propietario</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php include_once('../../header.php'); ?> 
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
          <form method="post" action="updatePropietario.php?nombre=<?php $nombre?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_propietario" required value=<?php echo $id_propietario->get_id_propietario(); ?>>
            </div>  
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="nombreModificado" required value=<?php echo $nombre->get_nombre(); ?>>
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name ="apellido" required  value=<?php echo $cliente->get_apellido(); ?>>
            </div>
            <div class="form-group">
                <label for="username">RUC</label>
                <input type="text" class="form-control" name ="ruc" required  value=<?php echo $ruc->get_ruc(); ?>>
            </div>
            <div class="form-group">
                <label for="username">NUMERO CUENTA</label>
                <input type="text" class="form-control" name ="numerocuenta" required  value=<?php echo $numerocuenta->get_numerocuenta(); ?>>
            </div>
            <div class="form-group">
                <label for="username">ESTADO</label>
                <input type="text" class="form-control" name ="estado" required  value=<?php echo $estado->get_estado(); ?>>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readPropietario.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
<?php 

    include_once("../../modal_exito.php");
?>