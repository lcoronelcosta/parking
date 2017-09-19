<?php 
    include_once("../cliente/ClienteCollector.php");
    $clienteCollectorObj = new ClienteCollector();
?>
<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>CLIENTES</strong>
                 </h2>
            </div>
            <div class="modal-body alert-success">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>ID-USUARIO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            $con = 1000;        
            foreach ($clienteCollectorObj->showClientes() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_cliente() . "</td>";         
            echo "<td>" . $c->get_id_usuario() . "</td>";   
            echo "<td>" . $c->get_nombre() . "</td>"; 
            echo "<td>" . $c->get_apellido() . "</td>";    
            echo "<td><a data-dismiss='modal' id='$con'><i class='glyphicon glyphicon-ok'></i>
                </a></td>"; 
            echo "</tr>";    
        ?>
            <script>
                $("#<?php echo "".$con.""; ?>").click(function(){
                    document.getElementById('id_c').value = '<?php echo "".$c->get_id_cliente().""; ?>';
                    document.getElementById('n_c').value = '<?php echo "".$c->get_nombre().""; ?>';
                    document.getElementById('a_c').value = '<?php echo "".$c->get_apellido().""; ?>';
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