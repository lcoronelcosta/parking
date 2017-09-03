<?php
    session_start();
    include_once("MultaCollector.php");
    $multaCollectorObj = new MultaCollector();
    $id_multa = $_GET['id_multa'];
    $descripcion = $_GET['descripcion'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Multa</title>
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
          <span>Editar Vehiculo</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateMulta.php?descripcion=<?php $descripcion?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_multa" required value=<?php echo "$id_multa"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Descripcion</label>
                <input type="text" class="form-control" name="multaModificado" required value=<?php echo "$descripcion"; ?>>
            </div>
            
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readMulta.php" class="btn btn-info pull-right">Salir</a>       
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