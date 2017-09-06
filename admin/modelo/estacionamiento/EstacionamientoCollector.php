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
        
        function createEstacionamiento($nombre, $direccion, $latitud, $longitud, $numero, $estado) {
 
            $ParqueaderoCollectorObj = new ParqueaderoCollector();
            $ParqueaderoCollectorObj->createParqueadero($nombre, $direccion, $latitud, $longitud);
            $row = self::$db->getRows("SELECT * FROM parqueadero ORDER BY id_parqueadero DESC limit 1",null);
            $parqueadero = array_pop($row);
            $ID = $parqueadero{'id_parqueadero'};
            $rows = self::$db->insertRow("INSERT INTO estacionamiento (id_parqueadero, numero, estado) VALUES ('$ID','$numero','$estado')",null);
        
        }
        
        function updateEstacionamiento($id_estacionamiento, $id_parqueadero, $numero, $estado) {
                $rows = self::$db->updateRow("UPDATE estacionamiento SET id_parqueadero='$id_parqueadero', numero='$numero', estado='$estado' WHERE id_estacionamiento='$id_estacionamiento'",null);

        }
        
        function deleteEstacionamiento($id_estacionamiento, $id_parqueadero) {
                $rows = self::$db->deleteRow("DELETE FROM parqueadero WHERE id_parqueadero=$id_parqueadero",null);
                $rows = self::$db->deleteRow("DELETE FROM estacionamiento WHERE id_estacionamiento=$id_estacionamiento",null);
        }
        
        function buscarParqueadero($nombre) {
                $rows = self::$db->getRows("SELECT * FROM parqueadero WHERE nombre='$nombre'");               
                foreach ($rows as $c){
                  $aux = new Parqueadero($c{'id_parqueadero'},$c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'});
                  return 1;
                }
                return 0;          
        }
    }
?>
