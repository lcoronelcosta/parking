<?php

    include_once('Multa.php');
    include_once('../Collector.php');

    class MultaCollector extends Collector{

        function showMulta() {
                $rows = self::$db->getRows("SELECT * FROM multa ");
                $arrayMulta= array();        
                foreach ($rows as $c){
                    $aux = new Multa($c{'id_multa'},$c{'descipcion'},$c{'valor'});
                    array_push($arrayMulta, $aux);
                }
                return $arrayMulta;        
        }
        
        function createMulta($descipcion,$valor){
                $rows = self::$db->insertRow("INSERT INTO multa (descipcion, valor) VALUES ('$descipcion','$valor')",null);
        
        }
        
        function updateMulta($id_multa, $descipcion, $valor) {
                $rows = self::$db->updateRow("UPDATE multa SET descipcion='$descipcion', multa='$multa'WHERE id_multa='$id_multa'",null);

        }
        
        function deleteMulta($id_multa) {
                 $rows = self::$db->deleteRow("DELETE FROM multa WHERE id_multa=$id_multa",null);


        }
        
        function validarMulta($descripcion){
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descipcion='$descipcion'AND multa='$multa'");
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descipcion'},$c{'multa'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarMulta($descripcion) {
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descipcion='$descipcion'AND multa='$multa'");               
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descripcion'},$c{'multa'});
                  return 1;
                }
                return 0;          
            }
    }
?>
