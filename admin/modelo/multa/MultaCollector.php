<?php

    include_once('Multa.php');
    include_once('../Collector.php');

    class MultaCollector extends Collector{

        function showMultas() {
                $rows = self::$db->getRows("SELECT * FROM multa ");
                $arrayMulta= array();        
                foreach ($rows as $c){
                    $aux = new Multa($c{'id_multa'},$c{'descipcion'},$c{'valor'});
                    array_push($arrayMulta, $aux);
                }
                return $arrayMulta;        
        }

        function showMulta($id_multa) {
                $row = self::$db->getRows("SELECT * FROM multa WHERE id_multa='$id_multa'");
                $aux = new Multa($row[0]{'id_multa'},$row[0]{'descipcion'},$row[0]{'valor'});
                return $aux;        
        }
        
        function createMulta($descipcion,$valor){
                $rows = self::$db->insertRow("INSERT INTO multa (descipcion, valor) VALUES ('$descipcion','$valor')",null);
        
        }
        
        function updateMulta($id_multa, $descipcion, $valor) {
                $rows = self::$db->updateRow("UPDATE multa SET descipcion='$descipcion', valor='$valor' WHERE id_multa='$id_multa'",null);

        }
        
        function deleteMulta($id_multa) {
                 $rows = self::$db->deleteRow("DELETE FROM multa WHERE id_multa=$id_multa",null);


        }
        
        function validarMulta($descipcion, $valor){
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descipcion='$descipcion'AND valor='$valor'");
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descipcion'},$c{'valor'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarMulta($descipcion) {
                $rows = self::$db->getRows("SELECT * FROM multa WHERE descipcion='$descipcion'");               
                foreach ($rows as $c){
                  $aux = new Multa($c{'id_multa'},$c{'descipcion'},$c{'valor'});
                  return 1;
                }
                return 0;          
            }
    }
?>
