<?php

    class Propietario
    {
        private $id_propietario;
        private $nombre;
        private $apellido;
        private $ruc;
        private $numerocuenta;
        private $estado;


        function __construct($id_propietario, $nombre, $apellido, $ruc, $numerocuenta, $estado) {
           $this->id_propietario = $id_propietario;
           $this->nombre = $nombre;
           $this->apellido = $apellido;
           $this->ruc = $ruc;
           $this->numerocuenta = $numerocuenta;
           $this->estado = $estado;
         }
        
        function set_id_propietario($id_propietario){
           $this->id_ = $id_propietario;
         } 
         function get_id_propietario(){
           return $this->id_propietario;
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

         function set_ruc($ruc){
           $this->ruc = $ruc;
         } 
         function get_ruc(){
           return $this->ruc;
         }

         function set_numerocuenta($numerocuenta){
           $this->numerocuenta = $numerocuenta;
         } 
         function get_numerocuenta(){
           return $this->numerocuenta;
         } 

         function set_estado($estado){
           $this->estado = $estado;
         } 
         function get_estado(){
           return $this->estado;
         } 
    }
?>