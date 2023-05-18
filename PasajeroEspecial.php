<?php

class PasajeroEspecial extends Pasajero
{
    //Silla de ruedas, asistencia y comida especial
    private $sillaDeRuedas; //bool
    private $asistencia; //bool
    private $comidaEspecial; //bool

    public function __construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket, $sillaDeRuedas, $asistencia, $comidaEspecial)
    {
        parent::__construct($nombre, $apellido, $telefono, $documento, $numAsiento, $numTicket);
        $this->sillaDeRuedas = $sillaDeRuedas;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }

    public function setSilladeRuedas($sillaDeRuedas)
    {
        $this->sillaDeRuedas = $sillaDeRuedas;
    }

    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;
    }

    public function serComidaEspecial($comidaEspecial)
    {
        $this->comidaEspecial = $comidaEspecial;
    }

    public function getSillaDeRuedas()
    {
        return $this->sillaDeRuedas;
    }

    public function getAsistencia()
    {
        return $this->asistencia;
    }

    public function getComidaEspecial()
    {
        return $this->comidaEspecial;
    }
    public function __toString()
    {
        return parent::__toString() . "Necesita asistencia: " . $this->getSillaDeRuedas() . $this->getAsistencia() . $this->getComidaEspecial() . "\n";
    }

    public function darPorcentajeIncremento()
    {

        $sillaDeRuedas = $this->getSillaDeRuedas();
        $asistencia = $this->getAsistencia();
        $comidaEspecial = $this->getComidaEspecial();
        if ($sillaDeRuedas == true && $asistencia == false && $comidaEspecial == false) {
            $porcentaje = 0.15;
        }elseif ($sillaDeRuedas == false && $asistencia == true && $comidaEspecial == false){
            $porcentaje = 0.15;
        }elseif ($sillaDeRuedas == false && $asistencia == false && $comidaEspecial == true){
            $porcentaje = 0.15;
        }
        elseif ($sillaDeRuedas == true && $asistencia == true && $comidaEspecial == true) {
            $porcentaje = 0.30;
        }

        return $porcentaje;
    }
}
