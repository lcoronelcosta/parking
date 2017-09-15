<?php 
    include_once("../reservas/ReservaCollector.php");
    include_once("../cliente/ClienteCollector.php");
    include_once("../vehiculo/VehiculoCollector.php");
    include_once("../multaReserva/MultaReservaCollector.php");


    $vehiculoCollectorObj = new VehiculoCollector();
    $clienteCollectorObj = new ClienteCollector();
    $reservaCollectorObj = new ReservaCollector();
    $multaReservaCollectorObj = new MultaReservaCollector();

?>
<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade bs-example-modal-lg" id="myModalReserva" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
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
            $con = 1;        
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
            $clienteObj =  $clienteCollectorObj->showCliente($c->get_id_cliente());  
            $vehiculoObj = $vehiculoCollectorObj->showVehiculo($c->get_id_vehiculo()); 
            $total = $multaReservaCollectorObj->calcularTotal($c->get_id_reserva());     
        ?>
            <script>
                $("#<?php echo "".$con.""; ?>").click(function(){
                    document.getElementById('id_r').value = '<?php echo "".$c->get_id_reserva().""; ?>';
                    document.getElementById('n_c').value = '<?php echo "".$clienteObj->get_nombre().""; ?>';
                    document.getElementById('a_c').value = '<?php echo "".$clienteObj->get_apellido().""; ?>';
                    document.getElementById('d_v').value = '<?php echo "".$vehiculoObj->get_descripcion().""; ?>';
                    document.getElementById('total').value = '<?php echo "$total"; ?>';

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