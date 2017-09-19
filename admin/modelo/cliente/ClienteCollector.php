<?php

    include_once('Cliente.php');
    include_once('../usuario/Usuario.php');
    include_once("../usuario/UsuarioCollector.php");
    include_once('../Collector.php');
    

    class ClienteCollector extends Collector{

        function showClientes() {
                $rows = self::$db->getRows("SELECT * FROM cliente ");
                $arrayCliente= array();        
                foreach ($rows as $c){
                    $aux = new Cliente($c{'id_cliente'},$c{'id_usuario'},$c{'nombre'},$c{'apellido'});
                    array_push($arrayCliente, $aux);
                }
                return $arrayCliente;        
        }
        
        function showCliente($id_cliente) {
                $row = self::$db->getRows("SELECT * FROM cliente WHERE id_cliente='$id_cliente'");
                $aux = new Cliente($row[0]{'id_cliente'},$row[0]{'id_usuario'},$row[0]{'nombre'},$row[0]{'apellido'});
                return $aux;        
        }
        
        function createCliente($nombre, $apellido, $usuario, $clave, $rol) {
            $UsuarioCollectorObj = new UsuarioCollector();
            $UsuarioCollectorObj->createUsuario($usuario, $clave, $rol);
            $row = self::$db->getRows("SELECT * FROM usuario ORDER BY id_usuario DESC limit 1",null);
            $usuario = array_pop($row);
            $ID = $usuario{'id_usuario'};
            $rows = self::$db->insertRow("INSERT INTO cliente (id_usuario, nombre, apellido) VALUES ('$ID','$nombre','$apellido')",null);
        
        }
        
        function updateCliente($id_cliente, $nombre, $apellido) {
                $rows = self::$db->updateRow("UPDATE cliente SET nombre='$nombre', apellido='$apellido' WHERE id_cliente='$id_cliente'",null);

        }
        
        function deleteCliente($id_cliente, $id_usuario) {
                $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario=$id_usuario",null);
                $rows = self::$db->deleteRow("DELETE FROM cliente WHERE id_cliente=$id_cliente",null);
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