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
        
        function createUsuario($usuario,$clave,$rol) {
                $rows = self::$db->insertRow("INSERT INTO usuario (usuario, password, rol) VALUES ('$usuario', '$clave', '$rol')",null);
        
        }
        
        function updateUsuario($id_usuario, $usuario, $clave, $rol) {
                $rows = self::$db->updateRow("UPDATE usuario SET usuario='$usuario', password='$clave', rol='$rol' WHERE id_usuario='$id_usuario'",null);

        }
        
        function deleteUsuario($id_usuario) {
                 $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario=$id_usuario",null);


        }
        
        function validarUsuario($usuario,$clave){
                $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'");
                foreach ($rows as $c){
                  $aux = new Usuario($c{'id_usuario'},$c{'usuario'},$c{'password'},$c{'rol'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarUsuario($usuario) {
                $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$usuario'");               
                foreach ($rows as $c){
                  $aux = new Usuario($c{'id_usuario'},$c{'usuario'},$c{'password'},$c{'rol'});
                  return 1;
                }
                return 0;          
        }
    }
?>