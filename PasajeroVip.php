<?php

class PasajeroVip extends Pasajero
{

    private $numViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillas){
        parent::__construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket);
        $this->numViajeroFrecuente = $numViajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }

    public function setNumViajeroFrecuente($numViajeroFrecuente){
        $this->numViajeroFrecuente = $numViajeroFrecuente;
    }

    public function setCantMillas($cantMillas){
        $this->cantMillas = $cantMillas;
    }

    public function getNumViajeroFrecuente(){
        return $this->numViajeroFrecuente;
    }

    public function getCantMillas(){
       return $this->cantMillas;
    }


    public function __toString()
    {
        return parent::__toString() . "Numero viajero frecuente: " . $this->getNumViajeroFrecuente() . "\n".
        "Millas del pasajero: " . $this->getCantMillas() ."\n";
    }

    public function darPorcentajeIncremento(){
        
        if($this->getCantMillas() <= 300){
            $porcentaje = 0.35;
        }else{
            $porcentaje = 0.30;
        }
        return $porcentaje;
    }
}
