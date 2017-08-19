<?php

    include_once('Parqueadero.php');
    include_once('../Collector.php');

    class ParqueaderoCollector extends Collector{

        function showParqueadero() {
                $rows = self::$db->getRows("SELECT * FROM parqueadero ");
                $arrayParqueadero= array();        
                foreach ($rows as $c){
                    $aux = new Parqueadero($c{'id_parqueadero'},$c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'});
                    array_push($arrayParqueadero, $aux);
                }
                return $arrayParqueadero;        
        }
        
        function createParqueadero($nombre,$direccion,$latitud,$longitud){
                $rows = self::$db->insertRow("INSERT INTO parqueadero (nombre, direccion, latitud, longitud) VALUES ('$nombre', '$direccion', '$latitud', '$longitud')",null);
        
        }
        
        function updateParqueadero($id_parqueadero, $nombre, $direccion, $latitud, $longitud) {
                $rows = self::$db->updateRow("UPDATE parqueadero SET nombre='$nombre', direccion='$direccion', latitud='$latitud', longittud='$longitud' WHERE id_parqueadero='$id_parqueadero'",null);

        }
        
        function deleteParqueadero($id_parqueadero) {
                 $rows = self::$db->deleteRow("DELETE FROM parqueadero WHERE id_parqueadero=$id_parqueadero",null);


        }
        
        function validarParqueadero($nombre,$direccion){
                $rows = self::$db->getRows("SELECT * FROM parqueadero WHERE nombre='$nombre' AND direccion='$direccion'");
                foreach ($rows as $c){
                  $aux = new Parqueadero($c{'id_parqueadero'},$c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'});
                  return 1;
                }
                return 0;
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
