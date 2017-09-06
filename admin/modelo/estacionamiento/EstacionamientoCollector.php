<?php

    include_once('Estacionamiento.php');
    include_once('../parqueadero/Parqueadero.php');
    include_once("../parqueadero/ParqueaderoCollector.php");
    include_once('../Collector.php');
    

    class EstacionamientoCollector extends Collector{

        function showEstacionamientos() {
                $rows = self::$db->getRows("SELECT * FROM estacionamiento ");
                $arrayEstacionamientos= array();        
                foreach ($rows as $c){
                    $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'id_parqueadero'},$c{'numero'},$c{'estado'});
                    array_push($arrayEstacionamientos, $aux);
                }
                return $arrayEstacionamientos;        
        }
        
        function showEstacionamiento($id_estacionamiento) {
                $row = self::$db->getRows("SELECT * FROM estacionamiento WHERE id_estacionamiento='$id_estacionamiento'");
                $aux = new Estacionamiento($row[0]{'id_estacionamiento'},$row[0]{'id_parqueadero'},$row[0]{'numero'},$row[0]{'estado'});
                return $aux;        
        }
        

    }
?>
