<?php

    class Tipopago
    {
        private $id_pago;
        private $descripcion;
        private $estado;
  

         function __construct($id_pago, $descripcion, $estado) {
           $this->id_pago = $id_pago;
           $this->descripcion = $descripcion;
           $this->estado = $estado;
         }

         function set_id_pago($id_pago){
           $this->id_pago = $id_pago;
         } 
         function get_id_pago(){
           return $this->id_pago;
         }

         function set_descripcion($descripcion){
           $this->descripcion = $descripcion;
         } 
         function get_descripcion(){
           return $this->descripcion;
         }

         function set_estado($estado){
           $this->estado = $estado;
         } 
         function get_estado(){
           return $this->estado;
         } 

         
    }
?>
