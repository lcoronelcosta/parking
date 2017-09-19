<?php

    include_once('DetalleFactura.php');
    include_once('../Collector.php');

    class DetalleFacturaCollector extends Collector{

        function showDetalleFacturas() {
                $rows = self::$db->getRows("SELECT * FROM detalle_factura");
                $arrayDetalleFactura= array();        
                foreach ($rows as $c){
                    $aux = new DetalleFactura($c{'id_detalle_factura'},$c{'tiempo'},$c{'total'},$c{'id_factura'});
                    array_push($arrayDetalleFactura, $aux);
                }
                return $arrayDetalleFactura;        
        }
        
        function showDetalleFactura($id_detalle_factura) {
                $row = self::$db->getRows("SELECT * FROM detalle_factura WHERE id_detalle_factura='$id_detalle_factura'");
                $aux = new DetalleFactura($row[0]{'id_detalle_factura'},$row[0]{'tiempo'},$row[0]{'total'},$row[0]{'id_factura'});
                return $aux;        
        }
        
        
        function createDetalleFactura($tiempo,$total,$id_factura){
                $rows = self::$db->insertRow("INSERT INTO detalle_factura (tiempo, total, id_factura) VALUES ('$tiempo', '$total', '$id_factura')",null);
        
        }
        
        function updateDetalleFactura($id_detalle_factura, $tiempo, $total, $id_factura) {
                $rows = self::$db->updateRow("UPDATE detalle_factura SET tiempo='$tiempo', total='$total', id_factura='$id_factura'  WHERE id_detalle_factura='$id_detalle_factura'",null);

        }
        
        function deleteDetalleFactura($id_detalle_factura) {
                 $rows = self::$db->deleteRow("DELETE FROM detalle_factura WHERE id_detalle_factura=$id_detalle_factura",null);


        }
        
        function validarDetalleFactura($id_factura){
                $rows = self::$db->getRows("SELECT * FROM detalle_factura WHERE id_factura='$id_factura'");
                foreach ($rows as $c){
                  $aux = new DetalleFactura($c{'id_detalle_factura'},$c{'tiempo'},$c{'total'},$c{'id_factura'},$c{'hora_facturacion'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarDetalleFactura($id_factura) {
                $rows = self::$db->getRows("SELECT * FROM detalle_factura WHERE id_factura='$id_factura'");               
                foreach ($rows as $c){
                  $aux = new DetalleFactura($c{'id_detalle_factura'},$c{'tiempo'},$c{'total'},$c{'id_factura'},$c{'hora_facturacion'});
                  return 1;
                }
                return 0;          
            }
    }
?>
