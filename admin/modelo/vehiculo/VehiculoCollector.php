<?php

    include_once('Vehiculo.php');
    include_once('../Collector.php');

    class VehiculoCollector extends Collector{

        function showVehiculos() {
                $rows = self::$db->getRows("SELECT * FROM vehiculo ");
                $arrayVehiculo= array();        
                foreach ($rows as $c){
                    $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'},$c{'id_cliente'});
                    array_push($arrayVehiculo, $aux);
                }
                return $arrayVehiculo;        
        }
        
        function showVehiculo($id_vehiculo) {
                $row = self::$db->getRows("SELECT * FROM vehiculo WHERE id_vehiculo='$id_vehiculo'");
                $aux = new Vehiculo($row[0]{'id_vehiculo'},$row[0]{'descripcion'},$row[0]{'placa'},$row[0]{'tipo'},$row[0]{'id_cliente'});
                return $aux;        
        }
        
        function showVehiculoByCliente($id_cliente) {
                $rows = self::$db->getRows("SELECT * FROM vehiculo WHERE id_cliente='$id_cliente'");
                $arrayVehiculo= array();        
                foreach ($rows as $c){
                    $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'},$c{'id_cliente'});
                    array_push($arrayVehiculo, $aux);
                }
                return $arrayVehiculo;        
        }
        
        function createVehiculo($descripcion,$placa,$tipo,$id_cliente){
                $rows = self::$db->insertRow("INSERT INTO vehiculo (descripcion, placa, tipo, id_cliente) VALUES ('$descripcion', '$placa', '$tipo', '$id_cliente')",null);
        
        }
        
        function updateVehiculo($id_vehiculo, $descripcion, $placa, $tipo, $id_cliente) {
                $rows = self::$db->updateRow("UPDATE vehiculo SET descripcion='$descripcion', placa='$placa', tipo='$tipo', id_cliente='$id_cliente' WHERE id_vehiculo='$id_vehiculo'",null);

        }
        
        function deleteVehiculo($id_vehiculo) {
                 $rows = self::$db->deleteRow("DELETE FROM vehiculo WHERE id_vehiculo=$id_vehiculo",null);


        }
        
        function validarVehiculo($descripcion,$placa){
                $rows = self::$db->getRows("SELECT * FROM vehiculo WHERE descripcion='$descripcion' AND placa='$placa'");
                foreach ($rows as $c){
                  $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'},$c{'id_cliente'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarVehiculo($descripcion) {
                $rows = self::$db->getRows("SELECT * FROM vehiculo WHERE descripcion='$descripcion'");               
                foreach ($rows as $c){
                  $aux = new Vehiculo($c{'id_vehiculo'},$c{'descripcion'},$c{'placa'},$c{'tipo'},$c{'id_cliente'});
                  return 1;
                }
                return 0;          
            }
    }
?>