<?php

class contacto {
    private $nombre;
    private $email;
    private $mensaje;
    
    function __construct($nombre, $email, $mensaje) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getEmail() {
        return $this->email;
    }

    function getMensaje() {
        return $this->mensaje;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }


}
