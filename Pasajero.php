<?php

Class Pasajero{

    private $nombre;
    private $apellido;
    private $telefono;
    private $documento;
    private $numAsiento;
    private $numTicket;   

    public function __construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->documento = $documento;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido =$apellido;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    public function setNumAsiento($numAsiento){
        $this->numAsiento = $numAsiento;
    }

    public function setNumTicket($numTicket){
        $this->numTicket = $numTicket;
    }

   

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function getNumAsiento(){
        return $this->numAsiento;
    }

    public function getNumTicket(){
        return $this->numTicket;
    }

  

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Telefono: " . $this->getTelefono() . "\n" .
        "Documento: " . $this->getDocumento() . "\n" .
        "Numero de asiento: " . $this->getNumAsiento() . "\n" . 
        "Numero de ticket: " . $this->getNumTicket() . "\n";
    }

    public function darPorcentajeIncremento(){
        $porcentaje = 0;
        return $porcentaje;
    }
}






?>