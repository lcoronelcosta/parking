<?php

    class DetalleFactura
    {
        private $id_detalle_factura;
        private $tiempo;
        private $total;
        private $id_factura;


        function __construct($id_detalle_factura, $tiempo, $total, $id_factura) {
           $this->id_detalle_factura = $id_detalle_factura;
           $this->tiempo = $tiempo;
           $this->total = $total;
           $this->id_factura = $id_factura;
         }
        
        function set_id_detalle_factura($id_detalle_factura){
           $this->id_detalle_factura = $id_detalle_factura;
         } 
         function get_id_detalle_factura(){
           return $this->id_detalle_factura;
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

         function set_id_factura($id_factura){
           $this->id_factura = $id_factura;
         } 
         function get_id_factura(){
           return $this->id_factura;
         }
    }
?>
