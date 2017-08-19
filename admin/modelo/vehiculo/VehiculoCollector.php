<?php

    include_once('Vehiculo.php');
    include_once('../Collector.php');

    class VehiculoCollector extends Collector{

        function showVehiculo() {
                $rows = self::$db->getRows("SELECT * FROM vehiculo ");
                $arrayVehiculo= array();        
                foreach ($rows as $c){
                    $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'});
                    array_push($arrayVehiculo, $aux);
                }
                return $arrayVehiculo;        
        }
        
        function createVehiculo($descripcion,$placa,$tipo){
                $rows = self::$db->insertRow("INSERT INTO vehiculo (descripcion, placa, tipo) VALUES ('$descripcion', '$placa', '$tipo')",null);
        
        }
        
        function updateVehiculo($id_vehiculo, $descripcion, $placa, $tipo) {
                $rows = self::$db->updateRow("UPDATE vehiculo SET descripcion='$descripcion', placa='$placa', tipo='$tipo' WHERE id_vehiculo='$id_vehiculo'",null);

        }
        
        function deleteVehiculo($id_vehiculo) {
                 $rows = self::$db->deleteRow("DELETE FROM vehiculo WHERE id_vehiculo=$id_vehiculo",null);


        }
        
        function validarVehiculo($descripcion,$placa){
                $rows = self::$db->getRows("SELECT * FROM vehiculo WHERE descripcion='$descripcion' AND placa='$placa'");
                foreach ($rows as $c){
                  $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarVehiculo($placa) {
                $rows = self::$db->getRows("SELECT * FROM vehiculo WHERE placa='$placa'");               
                foreach ($rows as $c){
                  $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'});
                  return 1;
                }
                return 0;          
            }
    }
?>
