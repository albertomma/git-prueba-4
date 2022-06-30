<?php

class Despedir {
    function __construct(string $nombre) {
        $this->nombre = $nombre;
        
    }

    function escribirDespedida() {
        echo "Adios $this->nombre";
    }
}
