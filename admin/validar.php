<?php

include_once('modelo/usuario/Usuario.php');
include_once('modelo/Collector.php');

class UsuarioCollector extends collector
{
  
  function validarUsuario($usuario,$clave){
      $rows = self::$db->getRows("SELECT * FROM usuario WHERE usuario='$usuario' AND password = '$clave'");               
    foreach ($rows as $c){
      $aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'password'},$c{'rol'});
      return 1;
    }
    return 0;
  }    
    
 }
?>