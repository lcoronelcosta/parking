<?php

    class Multa
    {
        private $id_multa;
        private $descipcion;
        private $valor;


        function __construct($id_multa, $descipcion, $valor) {
           $this->id_multa = $id_multa;
           $this->descipcion = $descipcion;
           $this->valor = $valor;
         }
        
        function set_id_multa($id_multa){
           $this->id_ = $id_multa;
         } 
         function get_id_multa(){
           return $this->id_multa;
         }

         function set_descipcion($descipcion){
           $this->descipcion = $descipcion;
         } 
         function get_descipcion(){
           return $this->descipcion;
         } 
         function set_valor($valor){
           $this->valor = $valor;
         } 
         function get_valor(){
           return $this->valor;
         } 
    }
?>
