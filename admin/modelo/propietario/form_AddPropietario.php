<?php
    session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Propietario</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../../modal.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar Propietario</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="savePropietario.php">
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre Propietario" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido Propietario" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">RUC</label>
                <input type="text" class="form-control" name="ruc" placeholder="RUC propietario" required autofocus>
            </div> 
            <div class="form-group">
                <label for="username">Numero Cuenta</label>
                <input type="text" class="form-control" name="numerocuenta" placeholder="Cuenta Propietario" required autofocus>
            </div> 
            <div class="form-group">
                <label for="username">Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="Estado" required autofocus>
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