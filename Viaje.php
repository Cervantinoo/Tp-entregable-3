<?php

class Viaje
{

    private $codigo;
    private $destino;
    private $responsable;
    private $cantPasajes;
    private $colPasajeros;
    private $costo;
    private $costeTotal;


    /**
     * Funcion constructora de la clase
     * @param string $codigo, $destino
     * @param object $responsable
     * @param int $cantPasajes
     * @param array $colPasajeros
     * @param float $costeTotal, $costo
     */
    public function __construct($codigo, $destino, $responsable, $cantPasajes, $colPasajeros, $costo, $costeTotal)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->responsable = $responsable;
        $this->cantPasajes = $cantPasajes;
        $this->colPasajeros = $colPasajeros;
        $this->costo = $costo;
        $this->costeTotal = $costeTotal;
    }

    //Metodos set
    /**
     *@param string $cod
     */
    public function setCodigo($cod)
    {
        $this->codigo = $cod;
    }

    /**
     * @param string $dest
     */
    public function setDestino($dest)
    {
        $this->destino = $dest;
    }

    /**
     * @param object $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * @param int $cantPasajes
     */
    public function setCantPasajes($cantPasajes)
    {
        $this->cantPasajes =  $cantPasajes;
    }

    /**
     * @param array $colPasajeros
     */

    public function setColPasajeros($colPasajeros)
    {
        $this->colPasajeros = $colPasajeros;
    }

    /**
     * @param float $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @param float $costoTotal
     */
    public function setCosteTotal($costeTotal)
    {
        $this->costeTotal = $costeTotal;
    }

    //Metodos para obtener valores de los atributos de la clase

    /**
     * @return string $codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return string $destino
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @return object $responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @return float $costo
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @return int $cantPasajes
     */
    public function getCantPasajes()
    {
        return $this->cantPasajes;
    }

    /**
     * @return array colPasajeros
     */
    public function getColPasajeros()
    {
        return $this->colPasajeros;
    }

    /**
     * @return float $costeTotal
     */
    public function getCosteTotal()
    {
        return $this->costeTotal;
    }

    //Metodo para mostrar todos los valores de los atributos de la clase
    public function __toString()
    {
        return "Codigo de viaje: " . $this->getCodigo() . "\n" .
            "Destino: " . $this->getDestino() . "\n" .
            "Responsable: " . $this->getResponsable() . "\n" .
            "Asientos Disponibles: " . $this->getCantPasajes() . "\n" .
            "Pasajeros: \n" . $this->mostrarPasajeros($this->getColPasajeros()) . "\n" . "Precio del Pasaje: " . $this->getCosto() . "\n" .
            "Costo total: " . $this->getCosteTotal();
    }

    //Metodo que permite recorrer un arreglo de pasajeros, que nos permitira acceder a cada elemento del arreglo
    //para luego despues concatenarlo y retornarlo. 
    /**
     * @param array $arrayPasajeros
     * @return string $listado
     */
    public function mostrarPasajeros($arrayPasajeros)
    {
        $longitudArray = count($arrayPasajeros);
        $listado = "";
        for ($i = 0; $i < $longitudArray; $i++) {
            $listado = $listado . "Pasajero: " . $i + 1 . "\n" . $arrayPasajeros[$i];
        }
        return $listado;
    }

    public function venderPasaje($objPasajero)
    {

        $arrayPasajeros = $this->getColPasajeros(); 
        $recaudado = $this->getCosteTotal();
        if ($this->hayPasajesDisponibles()) {
            array_push($arrayPasajeros, $objPasajero);
            $this->setColPasajeros($arrayPasajeros);
            $porcentaje = $objPasajero->darPorcentajeIncremento();
            $totalApagar = 0;
            $totalApagar = ($this->getCosto() * $porcentaje) + $this->getCosto();
            echo $totalApagar . "\n";
            $recaudado = $this->getCosteTotal() + $totalApagar;
            $this->setCosteTotal($recaudado);
        }
        return $this->getCosteTotal(); 
    }



    public function hayPasajesDisponibles()
    {
        $hayPasajes = false;
        $pasajesDisponibles = $this->getCantPasajes(); //Guardamos la cantidad de pasajes disponibles
        $pasajesVendidos = count($this->getColPasajeros()); //Guardamos la cantidad de pasajeros que seria la cantidad de pasajes vendidos
        if ($pasajesDisponibles > $pasajesVendidos) {
            $hayPasajes = true;
        }
        return $hayPasajes;
    }
}
