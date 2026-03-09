<?php

class Usuario {
    private $nombre;
    private $correo;
    // Constructor
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    // get nombre
    public function getNombre() {
        return $this->nombre;
    }
    // get correo
    public function getCorreo() {
        return $this->correo;
    }

    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}

?>