<?php 
    include_once("../vehiculo/VehiculoCollector.php");
    $vehiculoCollectorObj = new VehiculoCollector();
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade" id="myModalVehiculo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>VEHICULOS</strong>
                 </h2>
            </div>
            <div class="modal-body alert-success">
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>DESCRIPCION</th>
                <th>PLACA</th>
                <th>TIPO</th>
                <th>CLIENTE</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>

        <?php
            foreach ($vehiculoCollectorObj->showVehiculos() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_vehiculo() . "</td>";         
            echo "<td>" . $c->get_descripcion() . "</td>";   
            echo "<td>" . $c->get_placa() . "</td>"; 
            echo "<td>" . $c->get_tipo() . "</td>"; 
            echo "<td>" . $c->get_id_cliente() . "</td>";     
            echo "<td><a data-dismiss='modal' id=". $c->get_placa() . "><i class='glyphicon glyphicon-ok'></i>
                </a></td>"; 
            echo "</tr>";    
        ?>
            <script>    
                $("#<?php echo "".$c->get_placa().""; ?>").click(function(){
                    document.getElementById('id_v').value = '<?php echo "".$c->get_id_vehiculo().""; ?>';
                    document.getElementById('d_v').value = '<?php echo "".$c->get_descripcion().""; ?>';
                    document.getElementById('p_v').value = '<?php echo "".$c->get_placa().""; ?>';
                    $('#buscar_vehiculo').attr('disabled', false);
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
