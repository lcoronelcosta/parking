<?php

    class Parqueadero
    {
        private $id_parqueadero;
        private $id_propietario;
        private $nombre;
        private $direccion;
        private $latitud;
        private $longitud;


         function __construct($id_parqueadero, $id_propietario, $nombre, $direccion, $latitud, $longitud) {
           $this->id_parqueadero = $id_parqueadero;
           $this->id_propietario = $id_propietario;
           $this->nombre = $nombre;
           $this->direccion = $direccion;
           $this->latitud = $latitud;
           $this->longitud = $longitud;
         }

         function set_id_parqueadero($id_parqueadero){
           $this->id_parqueadero = $id_parqueadero;
         } 
         function get_id_parqueadero(){
           return $this->id_parqueadero;
         }

         function set_id_propietario($id_propietario){
           $this->id_propietario = $id_propietario;
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

         function set_direccion($direccion){
           $this->direccion = $direccion;
         } 
         function get_direccion(){
           return $this->direccion;
         } 

         function set_latitud($latitud){
           $this->latitud = $latitud;
         } 
         function get_latitud(){
           return $this->latitud;
         }

         function set_longitud($longitud){
           $this->longitud = $longitud;
         } 
         function get_longitud(){
           return $this->longitud;
         }
    }
?>
