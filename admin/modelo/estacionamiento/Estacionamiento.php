<?php

    class Propietario
    {
        private $id_estacionamiento;
        private $numero;
        private $estado;


        function __construct($id_estacionamiento, $numero, $estado) {
           $this->id_estacionamiento = $id_estacionamiento;
           $this->numero = $numero;
           $this->estado = $estado;
         }
        
        function set_id_estacionamiento($id_estacionamiento){
           $this->id_ = $id_estacionamiento;
         } 
         function get_id_estacionamiento(){
           return $this->id_estacionamiento;
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
