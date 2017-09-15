<?php

    include_once('Tipopago.php');
    include_once('../Collector.php');

    class TipopagoCollector extends Collector{

        function showTipopago() {
                $rows = self::$db->getRows("SELECT * FROM tipo_pago ");
                $arrayTipopago= array();        
                foreach ($rows as $c){
                    $aux = new Tipopago($c{'id_pago'},$c{'descripcion'},$c{'estado'});
                    array_push($arrayTipopago, $aux);
                }
                return $arrayTipopago;        
        }

        function showTipopagoU($id_pago) {
                $rows = self::$db->getRows("SELECT * FROM tipo_pago WHERE id_pago=$id_pago");
                $aux = new Tipopago($rows[0]{'id_pago'},$rows[0]{'descripcion'},$rows[0]{'estado'});
                return $aux;        
        }
        
        function createTipopago($descripcion,$estado){
                $rows = self::$db->insertRow("INSERT INTO tipo_pago (descripcion, estado) VALUES ('$descripcion', '$estado')",null);
        
        }
        
        function updateTipopago($id_pago, $descripcion, $estado) {
                $rows = self::$db->updateRow("UPDATE tipo_pago SET descripcion='$descripcion', estado='$estado' WHERE id_pago='$id_pago'",null);

        }
        
        function deleteTipopago($id_pago) {
                 $rows = self::$db->deleteRow("DELETE FROM tipo_pago WHERE id_pago=$id_pago",null);


        }
        
        function validarTipopago($descripcion,$estado){
                $rows = self::$db->getRows("SELECT * FROM tipo_pago WHERE descripcion='$descripcion' AND estado='$estado'");
                foreach ($rows as $c){
                  $aux = new Tipopago($c{'id_pago'},$c{'descripcion'},$c{'estado'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarTipopago($descripcion) {
                $rows = self::$db->getRows("SELECT * FROM tipo_pago WHERE descripcion='$descripcion'");               
                foreach ($rows as $c){
                  $aux = new Tipopago($c{'id_pago'},$c{'descripcion'},$c{'estado'});
                  return 1;
                }
                return 0;          
            }
    }
?>
