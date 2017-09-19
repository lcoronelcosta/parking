<?php

    class MultaReserva
    {
        private $id_multa_x_factura;
        private $id_multa;
        private $id_reserva;
        private $valor;


        function __construct($id_multa_x_factura, $id_multa, $id_reserva, $valor) {
           $this->id_multa_x_factura = $id_multa_x_factura;
           $this->id_multa = $id_multa;
           $this->id_reserva = $id_reserva;
           $this->valor = $valor;
         }
        
        function set_id_multa_x_factura($id_multa_x_factura){
           $this->id_multa_x_factura = id_multa_x_factura;
         } 
         function get_id_multa_x_factura(){
           return $this->id_multa_x_factura;
         }

         function set_id_multa($id_multa){
           $this->id_multa = $id_multa;
         } 
         function get_id_multa(){
           return $this->id_multa;
         }

         function set_id_reserva($id_reserva){
           $this->id_reserva = $id_reserva;
         } 
         function get_id_reserva(){
           return $this->id_reserva;
         }

         function set_valor($valor){
           $this->valor = $valor;
         } 
         function get_valor(){
           return $this->valor;
         } 
    }
?>
