<?php

    include_once('MultaReserva.php');
    include_once('../Collector.php');

    class MultaReservaCollector extends Collector{

        function showMultaReservas() {
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva");
                $arrayMultaReserva= array();        
                foreach ($rows as $c){
                    $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                    array_push($arrayMultaReserva, $aux);
                }
                return $arrayMultaReserva;        
        }
        
        function showMultaReserva($id_multa_x_factura) {
                $row = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE id_multa_x_factura='$id_multa_x_factura'");
                $aux = new MultaReserva($row[0]{'id_multa_x_factura'},$row[0]{'id_multa'},$row[0]{'id_reserva'},$row[0]{'valor'});
                return $aux;        
        }
        
        
        function createMultaReserva($id_multa,$id_reserva,$valor){
                $rows = self::$db->insertRow("INSERT INTO multa_x_reserva (id_multa, id_reserva, valor) VALUES ('$id_multa', '$id_reserva', '$valor')",null);
        
        }
        
        function updateMultaReserva($id_multa_x_factura, $id_multa, $id_reserva, $valor) {
                $rows = self::$db->updateRow("UPDATE multa_x_reserva SET id_multa='$id_multa', id_reserva='$id_reserva', valor='$valor' WHERE id_multa_x_factura='$id_multa_x_factura'",null);

        }
        
        function deleteMultaReserva($id_multa_x_factura) {
                 $rows = self::$db->deleteRow("DELETE FROM multa_x_reserva WHERE id_multa_x_factura=$id_multa_x_factura",null);


        }
        
        function validarMultaReserva($valor){
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE valor='$valor'");
                foreach ($rows as $c){
                  $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarMultaReserva($valor) {
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE valor='$valor'");               
                foreach ($rows as $c){
                  $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                  return 1;
                }
                return 0;          
            }
    }
?>
