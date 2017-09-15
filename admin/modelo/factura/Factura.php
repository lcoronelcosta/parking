<?php

    class Factura
    {
        private $id_factura;
        private $id_reserva;
        private $descuento;
        private $total_multa;
        private $total_pagar;
        private $id_pago;
        private $estado;
        private $fecha;

        function __construct($id_factura, $id_reserva, $estado, $fecha) {
           $this->id_factura = $id_factura;
           $this->id_reserva = $id_reserva;
           $this->estado = $estado;    
           $this->fecha = $fecha;
         }
        
        function set_id_factura($id_factura){
           $this->id_factura = $id_factura;
         } 
         function get_id_factura(){
           return $this->id_factura;
         }

         function set_id_reserva($id_reserva){
           $this->id_reserva = $id_reserva;
         } 
         function get_id_reserva(){
           return $this->id_reserva;
         }

         function set_descuento($descuento){
           $this->descuento = $descuento;
         } 
         function get_descuento(){
           return $this->descuento;
         }

         function set_total_multa($total_multa){
           $this->total_multa = $total_multa;
         } 
         function get_total_multa(){
           return $this->total_multa;
         } 
        
         function set_total_pagar($total_pagar){
           $this->total_pagar = $total_pagar;
         } 
         function get_total_pagar(){
           return $this->total_pagar;
         } 
        
        function set_id_pago($id_pago){
           $this->id_pago = $id_pago;
         } 
         function get_id_pago(){
           return $this->id_pago;
         } 
        
        function set_estado($estado){
           $this->estado = $estado;
         } 
         function get_estado(){
           return $this->estado;
         } 

          function set_fecha($fecha){
           $this->fecha = $fecha;
         } 
         function get_fecha(){
           return $this->fecha;
         } 
    }
?>