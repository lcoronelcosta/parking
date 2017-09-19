<?php
    include_once("../parqueadero/ParqueaderoCollector.php");
    $parqueaderoCollectorObj = new ParqueaderoCollector();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Test Google Maps</title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTm6DHbbI85EpL52coi-2yu4b-oHXyDgQ"></script>    
</head>
<body>
    <h1>MAPA</h1>
    <div id="mapa" style="width: 100%; height: 100%;">
        
    </div>
    <script type="text/javascript">
        
        navigator.geolocation.getCurrentPosition( fn_ok, fn_error );
        var divMapa = document.getElementById('mapa');

        function fn_error(){
            divMapa.innerHTML = 'ERROR SOLICITUD';    
        }
        

        function fn_ok( res ){
            var lat = res.coords.latitude;
            var lon = res.coords.longitude;
			var coor = lat+','+lon;
            document.getElementById('origen_la').value = lat;
            document.getElementById('origen_lo').value = lon;

			var glatLon = new google.maps.LatLng( lat,lon );
			var objConfig = {
				zoom: 14,
				center: glatLon
            }

			var gMapa = new google.maps.Map(divMapa, objConfig);
            
            var objConfigMarker = {
                position: glatLon,
                map: gMapa,
                animation: google.maps.Animation.BOUNCE,
                title: "Usted esta aqui"
            }
            
            var gMarker = new google.maps.Marker(objConfigMarker);
            //FOR PARA LOS MARKERS
            
            <?php
                $i=1;
                foreach ($parqueaderoCollectorObj->showParqueaderos() as $c){
            ?>
            
            lat = <?php echo $c->get_latitud(); ?>;
            lon = <?php echo $c->get_longitud(); ?>; 
            glatLon = new google.maps.LatLng( lat,lon );
                
            var objConfigMarker<?php echo "$i";?> = {
                position: glatLon,
                map: gMapa,
                animation: google.maps.Animation.DROP,
                title: "Usted esta aqui"
            }
            
            gMarker<?php echo "$i";?> = new google.maps.Marker(objConfigMarker<?php echo "$i";?>); 
            
            var objHTML = {
                content: "<h1><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>&#160;<?php echo "".$c->get_nombre().""; ?></h1><p><span class='glyphicon glyphicon-screenshot' aria-hidden='true'></span>&#160;<b>Dirección</b><br> <?php echo "".$c->get_nombre().""; ?></p><p><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>&#160;<b>Descripción</b><br><?php echo "".$c->get_nombre().""; ?></p>"
            }
            
            var gIW<?php echo "$i";?> = new google.maps.InfoWindow(objHTML);
            
            google.maps.event.addListener(gMarker<?php echo "$i";?>, 'click', function(){
                gIW<?php echo "$i";?>.open(gMapa, gMarker<?php echo "$i";?>);
                document.getElementById('destino_la').value = lat;
                document.getElementById('destino_lo').value = lon;
                document.getElementById('id_p').value = '<?php echo "".$c->get_id_parqueadero().""; ?>';
                document.getElementById('d_p').value = '<?php echo "".$c->get_nombre().""; ?>';
            })
            
            <?php
                $i++;
            }?>
            
        }
    </script>
</body>
</html>
