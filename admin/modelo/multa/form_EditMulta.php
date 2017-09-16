<?php
    session_start();
    include_once("MultaCollector.php");
    $multaCollectorObj = new MultaCollector();
    $id_multa = $_GET['id_multa'];
    $descipcion = $_GET['descipcion'];
    $valor = $_GET['valor'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Multa</title>
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
          <span>Editar Multa</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateMulta.php?descipcion=<?php $descipcion?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_multa" readonly required value=<?php echo "$id_multa"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">DESCRIPCION</label>
                <input type="text" class="form-control" name="multaModificado" required value="<?php echo "$descipcion"; ?>">
            </div>
            <div class="form-group">
                <label for="username">VALOR</label>
                <input type="text" class="form-control" name="valor" required value="<?php echo "$valor"; ?>">
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
