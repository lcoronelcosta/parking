<?php

    include_once('Reserva.php');
    include_once('../Collector.php');

    class ReservaCollector extends Collector{

        function showReservas() {
                $rows = self::$db->getRows("SELECT * FROM reserva ");
                $arrayReservas = array();        
                foreach ($rows as $c){
                    $aux = new Reserva($c{'id_reserva'},$c{'id_cliente'},$c{'id_vehiculo'},$c{'id_parqueo'},$c{'id_estacionamiento'}, $c{'fecha_inicio'},$c{'fecha_fin'},$c{'origen_latitude'},$c{'origen_longitud'},$c{'facturada'});
                    array_push($arrayReservas, $aux);
                }
                return $arrayReservas;        
        }
        
         function showReserva($id_reserva) {
                $row = self::$db->getRows("SELECT * FROM reserva WHERE id_reserva='$id_reserva'");
                $aux = new Reserva($row[0]{'id_reserva'},$row[0]{'id_cliente'},$row[0]{'id_vehiculo'},$row[0]{'id_parqueo'},$row[0]{'id_estacionamiento'}, $row[0]{'fecha_inicio'},$row[0]{'fecha_fin'},$row[0]{'origen_latitude'},$row[0]{'origen_longitud'},$row[0]{'facturada'});
                return $aux;        
        }
        
        function createReserva($id_cliente, $id_vehiculo, $id_parqueo, $fecha_inicio, $fecha_fin, $o_latitud, $o_longitud, $id_estacionamiento, $facturada) {
                $rows = self::$db->insertRow("INSERT INTO reserva (id_cliente, id_vehiculo, id_parqueo, fecha_inicio, fecha_fin, origen_latitude, origen_longitud, id_estacionamiento, facturada) VALUES ('$id_cliente', '$id_vehiculo', '$id_parqueo', '$fecha_inicio', '$fecha_fin', '$o_latitud', '$o_longitud', '$id_estacionamiento', '$facturada')",null);
        
        }
        
        function updateReserva($id_reserva, $id_cliente, $id_vehiculo, $id_parqueo, $id_estacionamiento, $fecha_inicio, $fecha_fin, $origen_la, $origen_lo, $facturada) {
                $rows = self::$db->updateRow("UPDATE reserva SET id_cliente='$id_cliente', id_vehiculo='$id_vehiculo', id_parqueo='$id_parqueo', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', origen_latitude='$origen_la', origen_longitud='$origen_lo', id_estacionamiento='$id_estacionamiento', facturada='$facturada' WHERE id_reserva='$id_reserva'",null);

        }
        
        function deleteReserva($id_reserva) {
                $rows = self::$db->deleteRow("DELETE FROM reserva WHERE id_reserva=$id_reserva",null);
        }

        function calcularCosto($id_reserva){
            $row = self::$db->getRows("SELECT  FROM reserva WHERE id_reserva='$id_reserva'");
                $aux = new Reserva($row[0]{'id_reserva'},$row[0]{'id_cliente'},$row[0]{'id_vehiculo'},$row[0]{'id_parqueo'},$row[0]{'id_estacionamiento'}, $row[0]{'fecha_inicio'},$row[0]{'fecha_fin'},$row[0]{'origen_latitude'},$row[0]{'origen_longitud'});
                return $aux;  

        }
    }
?>