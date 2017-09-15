<?php 
    include_once("../detalleFactura/DetalleFacturaCollector.php");
    include_once("../factura/FacturaCollector.php");
    include_once("../reservas/ReservaCollector.php");
    include_once("../cliente/ClienteCollector.php");


    $detalleFacturaCollectorObj = new DetalleFacturaCollector();
    $facturaCollectorObj = new FacturaCollector();
    $reservaCollectorObj = new ReservaCollector();
    $clienteCollectorObj = new ClienteCollector();
    
?>
<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade bs-example-modal-lg" id="myModalFactura" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>FACTURAS</strong>
                 </h2>
            </div>
            <div class="modal-body alert-success">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-RESERVA</th>
                <th>ID-PAGO</th>
                <th>FECHA</th>
                <th>T-MULTA</th>
                <th>T_PAGAR</th>
                <th>ESTADO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            $con = 1;        
            foreach ($facturaCollectorObj->showsFactura() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_factura() . "</td>";         
            echo "<td>" . $c->get_id_reserva() . "</td>";  
            echo "<td>" . $c->get_id_pago() . "</td>";
            echo "<td>" . $c->get_fecha() . "</td>";
            echo "<td>" . $c->get_total_multa() . "</td>";
            echo "<td>" . $c->get_total_pagar() . "</td>";
            echo "<td>" . $c->get_estado() . "</td>";
            echo "<td><a data-dismiss='modal' id='$con'><i class='glyphicon glyphicon-ok'></i>
                </a></td>"; 
            echo "</tr>"; 
            $facturaObj =  $facturaCollectorObj->showFactura($c->get_id_factura());
            $reservaObj =  $reservaCollectorObj->showReserva($c->get_id_reserva());
            $clienteObj =  $clienteCollectorObj->showCliente($reservaObj->get_id_cliente());    
        ?>
            <script>
                $("#<?php echo "".$con.""; ?>").click(function(){
                    document.getElementById('id_f').value = '<?php echo "".$c->get_id_factura().""; ?>';
                    document.getElementById('id_r').value = '<?php echo "".$reservaObj->get_id_reserva().""; ?>';
                    document.getElementById('n_c').value = '<?php echo "".$clienteObj->get_id_cliente().""; ?>';

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
