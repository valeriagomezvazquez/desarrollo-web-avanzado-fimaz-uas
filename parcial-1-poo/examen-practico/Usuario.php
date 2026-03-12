<?php

class Usuario{
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo){
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            throw new Exception("correo invalido: $correo");
        }
        $this->correo = $correo;
        $this->nombre = $nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getNombre(){
        return $this->nombre;
    }
}
