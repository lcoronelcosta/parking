<?php

    class Reserva
    {
        private $id_reserva;
        private $id_cliente;
        private $id_vehiculo;
        private $id_parqueo;
        private $id_estacionamiento;
        private $fecha_inicio;
        private $fecha_fin;
        private $origen_latitud;
        private $origen_longitud;
        private $facturada;
        
        function __construct($id_reserva, $id_cliente, $id_vehiculo, $id_parqueo, $id_estacionamiento, $fecha_inicio, $fecha_fin, $origen_latitud, $origen_longitud,$facturada) {
           
           $this->id_reserva = $id_reserva;
           $this->id_cliente = $id_cliente;
           $this->id_vehiculo = $id_vehiculo;
           $this->id_parqueo = $id_parqueo; 
           $this->id_estacionamiento = $id_estacionamiento; 
           $this->fecha_inicio = $fecha_inicio;
           $this->fecha_fin = $fecha_fin;
           $this->origen_latitud = $origen_latitud;
           $this->origen_longitud = $origen_longitud; 
          $this->facturada = $facturada;      
            
         }

         function set_id_reservas($id_reserva){
           $this->id_reserva = $id_reserva;
         } 
         function get_id_reserva(){
           return $this->id_reserva;
         }

         function set_id_cliente($id_cliente){
           $this->id_cliente = $id_cliente;
         } 
         function get_id_cliente(){
           return $this->id_cliente;
         }

         function set_id_vehiculo($id_vehiculo){
           $this->id_vehiculo = $id_vehiculo;
         } 
         function get_id_vehiculo(){
           return $this->id_vehiculo;
         } 

         function set_id_parqueo($id_parqueo){
           $this->id_parqueo = $id_parqueo;
         } 
         function get_id_parqueo(){
           return $this->id_parqueo;
         }

         function set_id_estacionamiento($id_estacionamiento){
           $this->id_estacionamiento = $id_estacionamiento;
         } 
         function get_id_estacionamiento(){
           return $this->id_estacionamiento;
         }
         
         function set_fecha_inicio($fecha_inicio){
           $this->fecha_inicio = $fecha_inicio;
         } 
         function get_fecha_inicio(){
           return $this->fecha_inicio;
         }
        
         function set_fecha_fin($fecha_fin){
           $this->fecha_fin = $fecha_fin;
         } 
         function get_fecha_fin(){
           return $this->fecha_fin;
         }
        
         function set_origen_latitud($origen_latitud){
           $this->origen_latitud = $origen_latitud;
         } 
         function get_origen_latitud(){
           return $this->origen_latitud;
         }
        
         function set_origen_longitud($origen_longitud){
           $this->origen_longitud = $origen_longitud;
         } 
         function get_origen_longitud(){
           return $this->origen_longitud;
         }
        
         function set_facturada($facturada){
           $this->facturada = $facturada;
         } 
         function get_facturada(){
           return $this->facturada;
         }
    }
?>