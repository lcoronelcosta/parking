<?php

    include_once('Estacionamiento.php');
    include_once('../Collector.php');
    

    class EstacionamientoCollector extends Collector{

        function showEstacionamiento() {
                $rows = self::$db->getRows("SELECT * FROM estacionamiento ");
                $arrayPropietario= array();        
                foreach ($rows as $c){
                    $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'numero'},$c{'estado'});
                    array_push($arrayEstacionamiento, $aux);
                }
                return $arrayEstacionamiento;        
        }
        
        /*
        function showPropietario($id_propietario) {
                $row = self::$db->getRows("SELECT * FROM propietario WHERE id_propietario='$id_propietario'");
                $aux = new Propietario($row[0]{'id_propietario'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'ruc'},$row[0]{'numerocuenta'},$row[0]{'estado'});
                return $aux;        
        }*/
        
        function createEstacionamiento($numero, $estado) {
           $rows = self::$db->insertRow("INSERT INTO estacionamiento (id_estacionamiento, numero, estado) VALUES ($numero','$estado')",null);
        }
      
        function updateEstacionamiento($id_estacionamiento, $numero, $estado) {
                $rows = self::$db->updateRow("UPDATE estacionamiento SET numero='$numero', estado='$estado' WHERE id_estacionamiento='$id_estacionamiento'",null);

        }
        
        function deleteEstacionamiento($id_estacionamiento) {
                $rows = self::$db->deleteRow("DELETE FROM estacionamiento WHERE id_estacionamiento=$id_estacionamiento",null);
        }
        
        function buscarEstacionamiento($numero) {
                $rows = self::$db->getRows("SELECT * FROM estacionamiento  WHERE numero='numero'");               
                foreach ($rows as $c){
                  $aux = new Estacionamiento($c{'id_estacionamiento'},$c{'numero'},$c{'estado'});
                  return 1;
                }
                return 0;          
        }
    }
?>
