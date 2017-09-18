<?php
    session_start();
    include_once("PropietarioCollector.php");
    include_once("Propietario.php");
    $propietarioCollectorObj = new PropietarioCollector();
    $id_propietario = $_GET['id_propietario'];
    $propietarioObj = $propietarioCollectorObj->showPropietario($id_propietario);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Propietario</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>EDITAR PROPIETARIO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updatePropietario.php?nombre=<?php $nombre?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_propietario" readonly required value=<?php echo $propietarioObj->get_id_propietario(); ?>>
            </div>  
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="nombreModificado" required value="<?php echo $propietarioObj->get_nombre(); ?>">
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name ="apellido" required  value="<?php echo $propietarioObj->get_apellido(); ?>">
            </div>
            <div class="form-group">
                <label for="username">RUC</label>
                <input type="text" class="form-control" name ="ruc" required  value="<?php echo $propietarioObj->get_ruc(); ?>">
            </div>
            <div class="form-group">
                <label for="username">NUMERO CUENTA</label>
                <input type="text" class="form-control" name ="numerocuenta" required  value="<?php echo $propietarioObj->get_numerocuenta(); ?>">
            </div>
             <div class="form-group">
              <label for="level">Rol de usuario</label>
                <select class="form-control" name="estado">
                  <?php 
                    if ($propietarioObj->get_estado() == 'A'){
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
              <a href="readPropietario.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>