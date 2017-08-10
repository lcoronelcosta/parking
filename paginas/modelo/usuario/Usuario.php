<?php

    class Usuario
    {
        private $id_usuario;
        private $usuario;
        private $password;
        private $rol;


         function __construct($id_usuario, $usuario, $password, $rol) {
           $this->id_usuario = $id_usuario;
           $this->usuario = $usuario;
           $this->password = $password;
           $this->rol = $rol;
         }

         function set_id_usuario($id_usuario){
           $this->id_usuario = $id_usuario;
         } 
         function get_id_usuario(){
           return $this->id_usuario;
         }

         function set_usuario($usuario){
           $this->usuario = $usuario;
         } 
         function get_usuario(){
           return $this->usuario;
         }

         function set_password($password){
           $this->password = $password;
         } 
         function get_password(){
           return $this->password;
         } 

         function set_rol($rol){
           $this->rol = $rol;
         } 
         function get_rol(){
           return $this->rol;
         }
    }
?>