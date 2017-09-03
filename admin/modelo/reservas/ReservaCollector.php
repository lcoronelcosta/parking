<?php

    include_once('Reserva.php');
    include_once('../Collector.php');

    class ReservaCollector extends Collector{

        function showReservas() {
                $rows = self::$db->getRows("SELECT * FROM reserva ");
                $arrayReservas = array();        
                foreach ($rows as $c){
                    $aux = new Reserva($c{'id_reserva'},$c{'id_cliente'},$c{'id_vehiculo'},$c{'id_parqueo'},$c{'fecha_inicio'},$c{'fecha_fin'},$c{'origen_latitude'},$c{'origen_longitud'});
                    array_push($arrayReservas, $aux);
                }
                return $arrayReservas;        
        }
        
         function showReserva($id_reserva) {
                $row = self::$db->getRows("SELECT * FROM reserva WHERE id_reserva='$id_reserva'");
                $aux = new Reserva($row[0]{'id_reserva'},$row[0]{'id_cliente'},$row[0]{'id_vehiculo'},$row[0]{'id_parqueo'},$row[0]{'fecha_inicio'},$row[0]{'fecha_fin'},$row[0]{'origen_latitude'},$row[0]{'origen_longitud'});
                return $aux;        
        }
        
        function createReserva($id_cliente, $id_vehiculo, $id_parqueo, $fecha_inicio, $fecha_fin, $o_latitud, $o_longitud) {
                $rows = self::$db->insertRow("INSERT INTO reserva (id_cliente, id_vehiculo, id_parqueo, fecha_inicio, fecha_fin, origen_latitude, origen_longitud) VALUES ('$id_cliente', '$id_vehiculo', '$id_parqueo', '$fecha_inicio', '$fecha_fin', '$o_latitud', '$o_longitud')",null);
        
        }
        
        function updateReserva($id_reserva, $id_cliente, $id_vehiculo, $id_parqueo, $fecha_inicio, $fecha_fin, $origen_la, $origen_lo) {
                $rows = self::$db->updateRow("UPDATE reserva SET id_cliente='$id_cliente', id_vehiculo='$id_vehiculo', id_parqueo='$id_parqueo', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', origen_latitude='$origen_la', origen_longitud='$origen_lo' WHERE id_reserva='$id_reserva'",null);

        }
        
        function deleteReserva($id_reserva) {
                $rows = self::$db->deleteRow("DELETE FROM reserva WHERE id_reserva=$id_reserva",null);
        }
    }
?>