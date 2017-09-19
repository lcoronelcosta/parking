<?php 
    
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <?php 
		if (isset($_SESSION['mySesion'])){
		echo "<p> Bienvenido:(".$_SESSION['mySesion'].")";
	}
  else{
    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>";
  }
                ?>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="#">
                      <i class="glyphicon glyphicon-user"></i>
                      Perfil
                  </a>
              </li>
             <li class="last">
                 <a href="#">
                     <i class="glyphicon glyphicon-off"></i>
                     Salir
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
</body>
</html>