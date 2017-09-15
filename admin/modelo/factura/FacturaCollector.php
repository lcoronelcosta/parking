<?php

    include_once('Factura.php');
    include_once('../Collector.php');

    class FacturaCollector extends Collector{

        function showsFactura() {
                $rows = self::$db->getRows("SELECT * FROM factura ");
                $arrayFactura= array();        
                foreach ($rows as $c){
                    $aux = new Factura($c{'id_factura'},$c{'id_reserva'},$c{'estado'},$c{'fecha'});
                    $aux->set_id_pago($c{'id_pago'});
                    $aux->set_descuento($c{'descuento'});
                    $aux->set_total_multa($c{'total_multa'});
                    $aux->set_total_pagar($c{'total_pagar'});
                    array_push($arrayFactura, $aux);
                }
                return $arrayFactura;        
        }

        function showFactura($id_factura) {
                $rows = self::$db->getRows("SELECT * FROM factura WHERE id_factura='$id_factura'");
                    $aux = new Factura($rows[0]{'id_factura'},$rows[0]{'id_reserva'},$rows[0]{'estado'},$rows[0]{'fecha'});
                    $aux->set_id_pago($rows[0]{'id_pago'});
                    $aux->set_descuento($rows[0]{'descuento'});
                    $aux->set_total_multa($rows[0]{'total_multa'});
                    $aux->set_total_pagar($rows[0]{'total_pagar'});
                return $aux;        
        }
        
        function createFactura($id_reserva, $id_pago, $estado){
                $rows = self::$db->insertRow("INSERT INTO factura (id_reserva, id_pago, estado, fecha) VALUES ('$id_reserva', '$id_pago', '$estado', current_timestamp)",null);
        
        }
        
        function updateFactura($id_factura, $id_reserva, $id_pago, $total_multa, $total_pagar, $estado){
                $rows = self::$db->updateRow("UPDATE factura SET id_reserva='$id_reserva', total_multa='$total_multa', total_pagar='$total_pagar', estado='$estado', id_pago='$id_pago' WHERE id_factura='$id_factura'",null);

        }
        
        function deleteFactura($id_factura) {
                 $rows = self::$db->deleteRow("DELETE FROM factura WHERE id_factura='$id_factura'",null);


        }
    }
?>