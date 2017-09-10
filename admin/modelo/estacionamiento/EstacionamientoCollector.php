<?php

    include_once('Estacionamiento.php');
    include_once('../Collector.php');

    class EstacionamientoCollector extends Collector{

        function showEstacionamientos() {
                $rows = self::$db->getRows("SELECT * FROM estacionamiento");
                $arrayEstacionamiento= array();        
                foreach ($rows as $c){
                    $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'id_parqueadero'},$c{'numero'},$c{'estado'});
                    array_push($arrayEstacionamiento, $aux);
                }
                return $arrayEstacionamiento;        
        }

        function showEstacionamiento($id_estacionamiento) {
                $row = self::$db->getRows("SELECT * FROM estacionamiento WHERE id_estacionamiento='$id_estacionamiento'");
                $aux = new Estacionamiento($row[0]{'id_estacionamiento'},$row[0]{'id_parqueadero'},$row[0]{'numero'},$row[0]{'estado'});
                return $aux;        
        }
        
        function createEstacionamiento($id_parqueadero,$numero,$estado){
                $rows = self::$db->insertRow("INSERT INTO estacionamiento (id_parqueadero, numero, estado) VALUES ('$id_parqueadero','$numero','$estado')",null);
        
        }
        
        function updateEstacionamiento($id_estacionamiento, $id_parqueadero, $numero, $estado) {
                $rows = self::$db->updateRow("UPDATE estacionamiento SET id_parqueadero='$id_parqueadero', numero='$numero', estado='$estado' WHERE id_estacionamiento='$id_estacionamiento'",null);

        }
        
        function deleteEstacionamiento($id_estacionamiento) {
                 $rows = self::$db->deleteRow("DELETE FROM estacionamiento WHERE id_estacionamiento=$id_estacionamiento",null);


        }
        
        function validarEstacionamiento($numero){
                $rows = self::$db->getRows("SELECT * FROM estacionamiento WHERE numero='$numero'");
                foreach ($rows as $c){
                  $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'id_parqueadero'},$c{'numero'},$c{'estado'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarEstacionamiento($id_parqueo, $numero) {
                $rows = self::$db->getRows("SELECT * FROM estacionamiento WHERE numero='$numero' and id_parqueadero='$id_parqueo'");               
                foreach ($rows as $c){
                  $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'id_parqueadero'},$c{'numero'},$c{'estado'});
                  return 1;
                }
                return 0;          
            }
    }
?>
