<?php

    include_once('Propietario.php');
    include_once('../Collector.php');
    

    class PropietarioCollector extends Collector{

        function showPropietario() {
                $rows = self::$db->getRows("SELECT * FROM propietario ");
                $arrayPropietario= array();        
                foreach ($rows as $c){
                    $aux = new Propietario($c{'id_propietario'},$c{'nombre'},$c{'apellido'},$c{'ruc'},$c{'numerocuenta'},$c{'estado'});
                    array_push($arrayPropietario, $aux);
                }
                return $arrayPropietario;        
        }
        
        /*
        function showPropietario($id_propietario) {
                $row = self::$db->getRows("SELECT * FROM propietario WHERE id_propietario='$id_propietario'");
                $aux = new Propietario($row[0]{'id_propietario'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'ruc'},$row[0]{'numerocuenta'},$row[0]{'estado'});
                return $aux;        
        }*/
        
        function createPropietario($nombre, $apellido, $ruc, $numerocuenta, $estado) {
           $rows = self::$db->insertRow("INSERT INTO propietario (id_propietario, nombre, apellido, ruc, numerocuenta, estado) VALUES ($nombre','$apellido','$ruc','$numerocuenta','$estado')",null);
        }
      
        function updatePropietario($id_propietario, $nombre, $apellido, $ruc, $numerocuenta, $estado) {
                $rows = self::$db->updateRow("UPDATE propietario SET nombre='$nombre', apellido='$apellido', ruc='$ruc', numerocuenta='$numerocuenta', estado='$estado' WHERE id_propietario='$id_propietario'",null);

        }
        
        function deletePropietario($id_propietario) {
                $rows = self::$db->deleteRow("DELETE FROM propietario WHERE id_propietario=$id_propietario",null);
        }
        
        function buscarPropietario($nombre) {
                $rows = self::$db->getRows("SELECT * FROM propietario  WHERE nombre='nombre'");               
                foreach ($rows as $c){
                  $aux = new Propietario($c{'id_propietario'},$c{'nombre'},$c{'apellido'},$c{'ruc'},$c{'numerocuenta'},$c{'estado'});
                  return 1;
                }
                return 0;          
        }
    }
?>