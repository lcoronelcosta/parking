<?php

    include_once('Factura.php');
    include_once('../Collector.php');

    class FacturaCollector extends Collector{

        function showFactura() {
                $rows = self::$db->getRows("SELECT * FROM factura ");
                $arrayFactura= array();        
                foreach ($rows as $c){
                    $aux = new Factura($c{'id_factura'},$c{'id_reserva'},$c{'descuento'},$c{'total_multa'},$c{'total_pagar',$c{'estado'},$c{'id_pago'}});
                    array_push($arrayFactura, $aux);
                }
                return $arrayFactura;        
        }
        
        function createFactura($descripcion,$placa,$tipo,$id_cliente){
                $rows = self::$db->insertRow("INSERT INTO factura (descripcion, placa, tipo, id_cliente) VALUES ('$descripcion', '$placa', '$tipo', '$id_cliente')",null);
        
        }
        
        function updateVehiculo($id_factura, $id_reserva,$descuento,$total_multa,$total_pagar,$estado,$id_pago) {
                $rows = self::$db->updateRow("UPDATE factura SET id_reserva='$id_reserva', descuento='$descuento', total_multa='$total_multa', total_pagar='$total_pagar', estado='$estado', id_pago='$id_pago' WHERE id_factura='$id_factura'",null);

        }
        
        function deleteFactura($id_factura) {
                 $rows = self::$db->deleteRow("DELETE FROM factura WHERE id_factura='$id_factura'",null);


        }
    }
?>