<?php

    include_once('MultaReserva.php');
    include_once('../Collector.php');

    include_once('../detalleFactura/DetalleFacturaCollector.php');

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

        function showMultaReservaPorIdReserva($id_reserva) {
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE id_reserva = '$id_reserva'");
                $arrayMultaReserva= array();        
                foreach ($rows as $c){
                    $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                    array_push($arrayMultaReserva, $aux);
                }
                return $arrayMultaReserva;      
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
        
        function validarMultaReserva($id_multa_x_factura){
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE id_multa_x_factura='$id_multa_x_factura'");
                foreach ($rows as $c){
                  $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarMultaReserva($id_reserva) {
                $rows = self::$db->getRows("SELECT * FROM multa_x_reserva WHERE id_reserva='$id_reserva'");               
                foreach ($rows as $c){
                  $aux = new MultaReserva($c{'id_multa_x_factura'},$c{'id_multa'},$c{'id_reserva'},$c{'valor'});
                  return 1;
                }
                return 0;          
            }

            function calcularTotal($id_reserva){
                $row = self::$db->getRows("SELECT sum(valor) as total FROM multa_x_reserva  WHERE id_reserva='$id_reserva'");
                return $row[0]{'total'};  
            }

            function generarDetalles($id_reserva){

                $rowFactura = self::$db->getRows("SELECT * FROM factura ORDER BY id_factura DESC limit 1",null);
                $factura = array_pop($rowFactura);
                $ID = $factura{'id_factura'};
                $detalleCollectorObj = new DetalleFacturaCollector();
                foreach ($this->showMultaReservaPorIdReserva($id_reserva) as $c){
                    $detalleCollectorObj->createDetalleFactura("Valor por multa",$c->get_valor(), $ID);
                }

            }
    }
?>
