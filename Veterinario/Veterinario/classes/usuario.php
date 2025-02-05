<?php

class usuario{
    // Propiedades y metodos
    //Usando promoted propierties
    public function __construct(
        private $name, 
        private $cedula, 
        private $email, 
        private $telefono, 
        private $direc, 
        private $tipo,
    ){}

       function get_name(){
            return $this->name;
       }

       function get_cedula(){
            return $this->cedula;
       }

       function get_email(){
            return $this->email;
       }

       function get_telefono(){
            return $this->telefono;
       }

       function get_direc(){
            return $this->direc;
       }

       function get_tipo(){
            return $this->tipo;
       }

       function get_all(){
        return [$this->name,$this->cedula,$this->email,$this->telefono,$this->direc,$this->tipo];
        }



}

$user = new usuario('Esteban',10100,'e@e.com',321654,'Calle 123','U3');

echo $user->get_all()[0];
