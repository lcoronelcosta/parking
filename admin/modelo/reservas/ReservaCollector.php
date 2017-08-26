<?php

    include_once('Reserva.php');
    include_once('../Collector.php');

    class ReservaCollector extends Collector{

        function showReservas() {
                $rows = self::$db->getRows("SELECT * FROM reserva ");
                $arrayReservas = array();        
                foreach ($rows as $c){
                    $aux = new Reserva($c{'id_reserva'},$c{'id_cliente'},$c{'id_vehiculo'},$c{'id_parqueo'},$c{'fecha_inicio'},$c{'fecha_fin'},$c{'origen_latitud'},$c{'origen_longitud'},$c{'destino_latitud'},$c{'destino_longitud'},$c{'estado'});
                    array_push($arrayReservas, $aux);
                }
                return $arrayReservas;        
        }
    }
?>