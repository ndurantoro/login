<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario{
    private $nombre;
    private $nomusuario;
    private  $clave;
    
    function getNombre() {
        return $this->nombre;
    }

    function getNomusuario() {
        return $this->nomusuario;
    }

    function getClave() {
        return $this->clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNomusuario($nomusuario) {
        $this->nomusuario = $nomusuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }
    function __construct($nombre, $nomusuario, $clave) {
        $this->nombre = $nombre;
        $this->nomusuario = $nomusuario;
        $this->clave = $clave;
    }


    
}