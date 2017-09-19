<?php

    class Estacionamiento
    {
        private $id_estacionamiento;
        private $id_parqueadero;
        private $numero;
        private $estado;


        function __construct($id_estacionamiento, $id_parqueadero, $numero, $estado) {
           $this->id_estacionamiento = $id_estacionamiento;
           $this->id_parqueadero = $id_parqueadero;
           $this->numero = $numero;
           $this->estado = $estado;
         }
        
        function set_id_estacionamiento($id_estacionamiento){
           $this->id_estacionamiento = id_estacionamiento;
         } 
         function get_id_estacionamiento(){
           return $this->id_estacionamiento;
         }

         function set_id_parqueadero($id_parqueadero){
           $this->id_parqueadero = $id_parqueadero;
         } 
         function get_id_parqueadero(){
           return $this->id_parqueadero;
         }

         function set_numero($numero){
           $this->numero = $numero;
         } 
         function get_numero(){
           return $this->numero;
         }

         function set_estado($estado){
           $this->estado = $estado;
         } 
         function get_estado(){
           return $this->estado;
         } 
    }
?>
