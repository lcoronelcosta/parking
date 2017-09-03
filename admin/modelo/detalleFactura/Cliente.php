<?php

    class Cliente
    {
        private $id_detalle_facura;
        private $id_factura;
        private $tiempo;
        private $total;


        function __construct($id_detalle_facura, $id_factura, $tiempo, $total) {
           $this->id_detalle_facura = $id_detalle_facura;
           $this->id_factura = $id_factura;
           $this->tiempo = $tiempo;
           $this->total = $total;
         }
        
        function set_id_detalle_facura($id_detalle_facura){
           $this->id_detalle_facura = id_detalle_facura;
         } 
         function get_id_detalle_facura(){
           return $this->id_detalle_facura;
         }

         function set_id_factura($id_factura){
           $this->id_factura = $id_factura;
         } 
         function get_id_factura(){
           return $this->id_factura;
         }

         function set_tiempo($tiempo){
           $this->tiempo = $tiempo;
         } 
         function get_tiempo(){
           return $this->tiempo;
         }

         function set_total($total){
           $this->total = $total;
         } 
         function get_total(){
           return $this->total;
         } 
    }
?>