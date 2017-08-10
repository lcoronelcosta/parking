
<?php
    $user = $_POST['user'];
    $pass =  $_POST['pass'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Parking - Smart | About </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Parking" />
<script type="applisalonion/x-javasscript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="../css/swipebox.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!--/script-->
    <script type="text/javascript" src="../js/completo.js"></script>

<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/completo3.js"></script>

</head>
	
<body>
    
    <!--start-home-->
		<div class="banner two" id="home">
		<div class="header-bottom">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="../index.html"><h1>P<span>arking Smart</span></h1></a>
					  <p>seguro confiable</p>  
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="../index.html">Home</a></li>
								<li><a data-hover="Acerca" href="about.html">Acerca</a></li>
								<li><a data-hover="Servicios" href="services.html">Servicios</a></li>
								<li><a data-hover="Nosotros" href="team.html">Nosotros</a></li>
							    <li><a data-hover="Reservacion" href="reservation.html">Reservacion</a></li>
							    <li><a data-hover="Galeria" href="galeria.html">Galeria</a></li>
								<li><a data-hover="Contacto" href="contact.html">Contacto</a></li>
                                <li><a href="../index.php">Salir</a></li>
								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
    <script type="text/javascript" src="../js/completo4.js"></script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
	 <script type="text/javascript" src="../js/completo5.js"></script>
			 </div>
		</div>
	</div>

		 <div class="down"></div>
	</div>
        
    <?php
    if(1){
        echo "<p class='tittle'>Bienvenido : $user </p>";
        echo "<div class='service' id='services'>
                <div class='container'>
                    <h3 class='tittle'>Tablas</h3>
                    <div class='arrows-serve'><img src='../images/border.png' alt='border'></div>
                        <div class='inst-grids'>
                            <h3 class='tittle'>Zuñiga</h3>
                            <input type='button' value='TABLA1' >
                            <input type='button' value='TABLA2' >
                            <input type='button' value='TABLA3' >
                        </div>
                        <div class='inst-grids'>
                            <h3 class='tittle'>Mite</h3>
                            <input type='button' value='TABLA1' >
                            <input type='button' value='TABLA2' >
                            <input type='button' value='TABLA3' >	
                        </div>
                        <div>
                            <h3 class='tittle'>Coronel</h3>
                            <a href='modelo/usuario/readUsuario.php'><input type='button' value='USUARIOS'></a>
                            <input type='button' value='TABLA2' >
                            <input type='button' value='TABLA3' >	
                        </div>
                </div>
            </div> ";
    }
    else{
        echo "<h1>SUS PEDIDOS</h1>
        <a href='modelo/pedido/readPedido.php'><button>PEDIDOS</button></a>";
    }
    ?>
	

    <!--footer-->
		<div class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									  <a href="../index.html"><h2>P<span>arking Smart</span></h2></a>
									  <p>seguro confiable</p>
								   </div>
					<!--//logo2-->
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="https://twitter.com/?lang=es" class="tw" target="_blank"></a></li>
										<li><a href="https://www.facebook.com/" class="fb" target="_blank"> </a></li>
										<li><a href="https://plus.google.com/collections/featured?hl=es" class="in" target="_blank"> </a></li>
										
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s"> 2017 Parking Smart. All rights reserved | Design by <a href="../index.html">Parking Smart</a></p>

					 </div>
	     </div>
		<!--start-smooth-scrolling-->
	 <script type="text/javascript" src="../js/completo8.js"></script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--- //footer --->
<!-- for bootstrap working -->
		<script src="../js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>