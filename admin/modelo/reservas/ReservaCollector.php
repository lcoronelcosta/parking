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
        
        function createReserva($id_cliente, $id_vehiculo, $id_parqueo, $fecha_inicio, $fecha_fin, $o_latitud, $o_longitud) {
                $rows = self::$db->insertRow("INSERT INTO reserva (id_cliente, id_vehiculo, id_parqueo, fecha_inicio, fecha_fin, origen_latitude, origen_longitud) VALUES ('$id_cliente', '$id_vehiculo', '$id_parqueo', '$fecha_inicio', '$fecha_fin', '$o_latitud', '$o_longitud')",null);
        
        }
    }
?>