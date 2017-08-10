<?php

    include_once('Usuario.php');
    include_once('../Collector.php');

    class UsuarioCollector extends Collector{

        function showUsuarios() {
            $rows = self::$db->getRows("SELECT * FROM usuario ");
            $arrayUsuario= array();        
            foreach ($rows as $c){
                $aux = new Usuario($c{'id_usuario'},$c{'usuario'},$c{'password'},$c{'rol'});
                array_push($arrayUsuario, $aux);
            }
            return $arrayUsuario;        
        }
    }
?>