<?php

    include_once('Factura.php');
    include_once('FacturaCollector.php');
    include_once('../detalleFactura/DetalleFacturaCollector.php');
    include_once('../Collector.php');
    include_once('../reservas/ReservaCollector.php');
    $reservaCollectorObj = new ReservaCollector();

    class FacturaCollector extends Collector{

        function showsFactura() {
                $rows = self::$db->getRows("SELECT * FROM factura ");
                $arrayFactura= array();        
                foreach ($rows as $c){
                    $aux = new Factura($c{'id_factura'},$c{'id_reserva'},$c{'estado'},$c{'fecha'});
                    $aux->set_id_pago($c{'id_pago'});
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
                    $aux->set_total_multa($rows[0]{'total_multa'});
                    $aux->set_total_pagar($rows[0]{'total_pagar'});
                return $aux;        
        }
        
        function createFactura($id_reserva, $id_pago, $estado, $total_multa){
                $rows = self::$db->insertRow("INSERT INTO factura (id_reserva, id_pago, total_multa, estado, fecha) VALUES ('$id_reserva', '$id_pago', '$total_multa', '$estado', current_timestamp )",null);
        
        }
        
        function updateFactura($id_factura, $id_reserva, $id_pago, $total_multa, $total_pagar, $estado){
                $rows = self::$db->updateRow("UPDATE factura SET id_reserva='$id_reserva', total_multa='$total_multa', total_pagar='$total_pagar', estado='$estado', id_pago='$id_pago' WHERE id_factura='$id_factura'",null);

        }
        
        function deleteFactura($id_factura) {
                 $rows = self::$db->deleteRow("DELETE FROM factura WHERE id_factura='$id_factura'",null);
        }

        function updateFacturaTotal($id_factura, $total){
                $rows = self::$db->updateRow("UPDATE factura SET total_pagar='$total' WHERE id_factura='$id_factura'",null);

        }



        function calcularTotal($id_reserva, $total_multa){
            $detalleCollectorObj = new DetalleFacturaCollector();
            $row = self::$db->getRows("SELECT * FROM factura ORDER BY id_factura DESC limit 1",null);
            $factura = array_pop($row);
            $ID = $factura{'id_factura'};
            $reservaCollectorObj = new ReservaCollector();
            $reservaObj = $reservaCollectorObj->showReserva($id_reserva);
            $tiempoInicio = $reservaObj->get_fecha_inicio();

            $segundos=strtotime('now') - strtotime($tiempoInicio);
            $diferencia_horas=intval($segundos/3600);

            $total = $diferencia_horas * 2;

            $detalleCollectorObj->createDetalleFactura("Valor por uso  $diferencia_horas Horas",$total, $ID);
            $row = self::$db->getRows("SELECT sum(total) as total_pagar FROM detalle_factura WHERE id_factura='$ID'");


            $this->updateFacturaTotal($ID, $row[0]{'total_pagar'});
        }
    }
?>