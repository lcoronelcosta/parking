<?php

    include_once('DetFactura.php');
    include_once('../factura/Factura.php');
    include_once("../factura/FacturaCollector.php");
    include_once('../Collector.php');
    

    class DetFacturaCollector extends Collector{

        function showDetFactura() {
                $rows = self::$db->getRows("SELECT * FROM detFactura ");
                $arrayDetFactura= array();        
                foreach ($rows as $c){
                    $aux = new DetFactura($c{'id_detalle_facura'},$c{'id_factura'},$c{'tiempo'},$c{'total'});
                    array_push($arrayDetFactura, $aux);
                }
                return $arrayDetFactura;        
        }
        
        function showDetFactura($id_detalle_facura) {
                $row = self::$db->getRows("SELECT * FROM detFactura WHERE id_detalle_facura='$id_detalle_facura'");
                $aux = new DetFactura($row[0]{'id_detalle_facura'},$row[0]{'id_factura'},$row[0]{'tiempo'},$row[0]{'total'});
                return $aux;        
        }
        
        function createDetFactura($tiempo, $total, $descuento, $total_multa, $total_pagar, $estado) {
            
            $FacturaCollectorObj = new FacturaCollector();
            $FacturaCollectorObj->createFactura($descuento, $total_multa, $total_pagar, $estado);
            $row = self::$db->getRows("SELECT * FROM factura ORDER BY id_factura DESC limit 1",null);
            $factura = array_pop($row);
            $ID = $factura{'id_factura'};
            $rows = self::$db->insertRow("INSERT INTO detFactura (id_factura, tiempo, total) VALUES ('$ID','$tiempo','$total')",null);
        
        }
        
        function updateDetFactura($id_detalle_facura, $tiempo, $total) {
                $rows = self::$db->updateRow("UPDATE detFactura SET tiempo='$tiempo', total='$total' WHERE id_detalle_facura='$id_detalle_facura'",null);

        }
        
        function deleteDetFactura($id_detalle_facura, $id_factura) {
                $rows = self::$db->deleteRow("DELETE FROM detFactura WHERE id_factura=$id_factura",null);
                $rows = self::$db->deleteRow("DELETE FROM factura WHERE id_detalle_facura=$id_detalle_facura",null);
        }
        
        function buscarFactura($id_factura) {
                $rows = self::$db->getRows("SELECT * FROM factura WHERE id_factura='$id_factura'");               
                foreach ($rows as $c){
                  $aux = new Factura($c{'id_factura'},$c{'descuento'},$c{'total_multa'},$c{'total_pagar'},$c{'estado'});
                  return 1;
                }
                return 0;          
        }
    }
?>
