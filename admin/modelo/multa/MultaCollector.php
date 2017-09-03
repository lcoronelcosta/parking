<?php

    include_once('Multa.php');
    include_once('../Collector.php');

    class MultaCollector extends Collector{

        function showMulta() {
                $rows = self::$db->getRows("SELECT * FROM multa ");
                $arrayMulta= array();        
                foreach ($rows as $c){
                    $aux = new Multa($c{'id_multa'},$c{'descripcion'});
                    array_push($arrayMulta, $aux);
                }
                return $arrayMulta;        
        }
        
        function createMulta($descripcion){
                $rows = self::$db->insertRow("INSERT INTO multa (descripcion) VALUES ('$descripcion')",null);
        
        }
        
        function updateMulta($id_multa, $descripcion) {
                $rows = self::$db->updateRow("UPDATE multa SET descripcion='$descripcion' WHERE id_multa='$id_multa'",null);

        }
        
        function deleteMulta($id_multa) {
                 $rows = self::$db->deleteRow("DELETE FROM multa WHERE id_multa=$id_multa",null);


        }
        
        function validarMulta($descripcion){
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descripcion='$descripcion'");
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descripcion'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarMulta($descripcion) {
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descripcion='$descripcion'");               
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descripcion'});
                  return 1;
                }
                return 0;          
            }
    }
?>
