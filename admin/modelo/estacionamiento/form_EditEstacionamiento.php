<?php
    session_start();
    include_once("EstacionamientoCollector.php");
    include_once("../parqueadero/ParqueaderoCollector.php");
    $estacionamientoCollectorObj = new EstacionamientoCollector();
    $parqueaderoCollectorObj = new ParqueaderoCollector();
    $id_estacionamiento = $_GET['id_estacionamiento'];
    $id_parqueadero = $_GET['id_parqueadero'];
    $numero = $_GET['numero'];
    $estado = $_GET['estado'];
    $parqueaderoObj = $parqueaderoCollectorObj->showParqueadero($id_parqueadero);

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Estacionamiento</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Editar Estacionamiento</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateEstacionamiento.php?numero="<?php $numero?>"">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" readonly name="id_estacionamiento" required value="<?php echo $id_estacionamiento; ?>">
            </div>
            <div class="form-group">
                <label for="password">PARQUEADERO <a class="btn btn-info" data-toggle="modal" data-target="#myModalParqueos"><i class="glyphicon glyphicon-search"></i></a></label>
                
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" required name="id_parqueadero" id="id_parqueo" value="<?php echo $id_parqueadero; ?>">
                </div>
                <div class="col-md-4">
                    <input readonly type="text" class="form-control" name="nombre_parqueo" id="nombre_parqueo" value="<?php echo $parqueaderoObj->get_nombre(); ?>">
                </div>
                
            </div>   
            <div class="form-group">
                <label for="username">NUMERO</label>
                <input type="text" class="form-control" name="numeroModificado" required value="<?php echo $numero; ?>">
            </div>
             <div class="form-group">
              <label for="level">Estado</label>
                <select class="form-control" name="estado">
                  <?php 
                    if ($estado == 'A'){
                        echo "<option >Activo</option>";
                        echo "<option>Inactivo</option>";
                    }
                    else{
                        echo "<option>Inactivo</option>";
                        echo "<option >Activo</option>";
                    }
                    
                  ?>    
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readEstacionamiento.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
<?php include_once('../modals/modal_parqueos.php');?>
</html>
