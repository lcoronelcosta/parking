<?php

    class DetalleFactura
    {
        private $id_detalle_facura;
        private $tiempo;
        private $total;
        private $id_factura;
        private $hora_facturacion;


        function __construct($id_detalle_facura, $tiempo, $total, $id_factura, $hora_facturacion) {
           $this->id_detalle_facura = $id_detalle_facura;
           $this->tiempo = $tiempo;
           $this->total = $total;
           $this->id_factura = $id_factura;
           $this->hora_facturacion = $hora_facturacion;
         }
        
        function set_id_detalle_facura($id_detalle_facura){
           $this->id_detalle_facura = id_detalle_facura;
         } 
         function get_id_detalle_facura(){
           return $this->id_detalle_facura;
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

         function set_hora_facturacion($hora_facturacion){
           $this->hora_facturacion = $hora_facturacion;
         } 
         function get_hora_facturacion(){
           return $this->hora_facturacion;
         }
    }
?>
