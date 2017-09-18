<?php
    session_start();
    include_once("TipopagoCollector.php");
    $tipopagoCollectorObj = new TipopagoCollector();
    $id_pago = $_GET['id_pago'];
    $descripcion = $_GET['descripcion'];
    $estado = $_GET['estado'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Tipo Pago</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>EDITAR TIPO PAGO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateTipopago.php?descripcion=<?php $descripcion?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_pago" required value=<?php echo "$id_pago"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="tipopagoModificado" required value="<?php echo $descripcion; ?>">
            </div>
             <div class="form-group">
              <label for="level">Rol de usuario</label>
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
              <a href="readTipopago.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
