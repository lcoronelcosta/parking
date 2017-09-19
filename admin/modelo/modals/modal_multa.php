<?php 
    include_once("../multa/MultaCollector.php");
    $multaCollectorObj = new MultaCollector();
?>
<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="modal fade" id="myModalMultas" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>MULTAS</strong>
                 </h2>
            </div>
            <div class="modal-body alert-success">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr> 
                <th>ID</th>
                <th>DESCRIPCION</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <?php
            $con = 1000;
            foreach ($multaCollectorObj->showMultas() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_multa() . "</td>";         
            echo "<td>" . $c->get_descipcion() . "</td>";
            echo "<td>" . $c->get_valor() . "</td>";     
           echo "<td><a data-dismiss='modal' id='$con'><i class='glyphicon glyphicon-ok'></i>
                </a></td>"; 
            echo "</tr>";   
        ?>
            <script>
                $("#<?php echo "".$con.""; ?>").click(function(){
                    document.getElementById('id_multa').value = '<?php echo "".$c->get_id_multa().""; ?>';
                    document.getElementById('valor').value = '<?php echo "".$c->get_valor().""; ?>';
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