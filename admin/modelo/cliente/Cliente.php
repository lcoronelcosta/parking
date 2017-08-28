<?php

    class Cliente
    {
        private $id_cliente;
        private $id_usuario;
        private $nombre;
        private $apellido;


        function __construct($id_cliente, $id_usuario, $nombre, $apellido) {
           $this->id_cliente = $id_cliente;
           $this->id_usuario = $id_usuario;
           $this->nombre = $nombre;
           $this->apellido = $apellido;
         }
        
        function set_id_cliente($id_cliente){
           $this->id_cliente = id_cliente;
         } 
         function get_id_cliente(){
           return $this->id_cliente;
         }

         function set_id_usuario($id_usuario){
           $this->id_usuario = $id_usuario;
         } 
         function get_id_usuario(){
           return $this->id_usuario;
         }

         function set_nombre($nombre){
           $this->nombre = $nombre;
         } 
         function get_nombre(){
           return $this->nombre;
         }

         function set_apellido($apellido){
           $this->apellido = $apellido;
         } 
         function get_apellido(){
           return $this->apellido;
         } 
    }
?>