<?php

    class Vehiculo
    {
        private $id_vehiculo;
        private $descripcion;
        private $placa;
        private $tipo;


         function __construct($id_vehiculo, $descripcion, $placa, $tipo) {
           $this->id_vehiculo = $id_vehiculo;
           $this->descripcion = $descripcion;
           $this->placa = $placa;
           $this->tipo = $tipo;
         }

         function set_id_vehiculo($id_vehiculo){
           $this->id_vehiculo = $id_vehiculo;
         } 
         function get_id_vehiculo(){
           return $this->id_vehiculo;
         }

         function set_descripcion($descripcion){
           $this->descripcion = $descripcion;
         } 
         function get_descripcion(){
           return $this->descripcion;
         }

         function set_placa($placa){
           $this->placa = $placa;
         } 
         function get_placa(){
           return $this->placa;
         } 

         function set_tipo($tipo){
           $this->tipo = $tipo;
         } 
         function get_tipo(){
           return $this->tipo;
         }
    }
?>
