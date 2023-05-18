<?php

Class PasajeroEstandar extends Pasajero{

    public function __construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket)
    {
        parent::__construct($nombre,  $apellido, $telefono, $documento, $numAsiento, $numTicket);
    }

    
    public function darPorcentajeIncremento(){
        $porcentaje = 0.10;
        return $porcentaje;
    }

    public function __toString()
    {
        return parent::__toString();
    }
}

?>