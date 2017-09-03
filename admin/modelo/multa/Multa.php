<?php

    class Multa
    {
        private $id_multa;
        private $descripcion;


        function __construct($id_multa, $descripcion) {
           $this->id_multa = $id_multa;
           $this->descripcion = $descripcion;
         }
        
        function set_id_multa($id_multa){
           $this->id_ = $id_multa;
         } 
         function get_id_multa(){
           return $this->id_multa;
         }

         function set_descripcion($descripcion){
           $this->descripcion = $descripcion;
         } 
         function get_descricion(){
           return $this->descripcion;
         } 
    }
?>
