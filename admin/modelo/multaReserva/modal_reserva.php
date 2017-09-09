<?php 
    include_once("../reservas/ReservaCollector.php");
    $reservaCollectorObj = new ReservaCollector();
?>
<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade bs-example-modal-lg" id="myModalReservas" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>RESERVAS</strong>
                 </h2>
            </div>
            <div class="modal-body alert-success">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-CLIENTE</th>
                <th>ID-VEHICULO</th>
                <th>ID-PARQUEO</th>
                <th>F-INICIO</th>
                <th>F-FIN</th>
                <th>O-LAT</th>
                <th>O-LON</th>
            </tr>
        </thead>
        <?php
            $con = 100;        
            foreach ($reservaCollectorObj->showReservas() as $c){
           echo "<tr>";
            echo "<td>" . $c->get_id_reserva() . "</td>";         
            echo "<td>" . $c->get_id_cliente() . "</td>";   
            echo "<td>" . $c->get_id_vehiculo() . "</td>"; 
            echo "<td>" . $c->get_id_parqueo() . "</td>";
            echo "<td>" . $c->get_fecha_inicio() . "</td>";         
            echo "<td>" . $c->get_fecha_fin() . "</td>";   
            echo "<td>" . $c->get_origen_latitud() . "</td>"; 
            echo "<td>" . $c->get_origen_longitud() . "</td>"; 
            echo "<td><a data-dismiss='modal' id='$con'><i class='glyphicon glyphicon-ok'></i>
                </a></td>"; 
            echo "</tr>";    
        ?>
            <script>
                $("#<?php echo "".$con.""; ?>").click(function(){
                    document.getElementById('id_reserva').value = '<?php echo "".$c->get_id_reserva().""; ?>';
                });
            </script>        
                    
        <?php
            $con++;    
            }
        ?>
    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
