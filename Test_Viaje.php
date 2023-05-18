<?php

//Importamos scripts
include_once('Pasajero.php');
include_once('PasajeroEstandar.php');
include_once('PasajeroEspecial.php');
include_once('PasajeroVip.php');
include_once('Viaje.php');
include_once('ResponsableV.php');
include_once('modulos.php');


//Creamos los objetos de referencia
$objResponsable = new ResponsableV("88", "333", "Agustin", "Lordi");
$objPasajeroEstandar = new PasajeroEstandar("marco", "galan", "11111", "11111","25", "1");
$objPasajeroEspecial = new PasajeroEspecial("franquito", "Ortiz", "22222", "22222", "26", "2", true, false, false);
$objPasajeroVip = new PasajeroVip("veronica", "Carilao", "33333", "33333","35", "3","258", 301);
//$colPasajeros = array($objPasajeroEspecial, $objPasajeroVip);

$objViaje = new Viaje(99,"Roca",$objResponsable,4,[],1000,0);
$objViaje->venderPasaje($objPasajeroEstandar);
$objViaje->venderPasaje($objPasajeroEspecial);
$objViaje->venderPasaje($objPasajeroVip);
//$objViaje->venderPasaje($objPasajeroEstandar);
//$objViaje->venderPasaje($objPasajeroEspecial);
//$objViaje->venderPasaje($objPasajeroVip);



//Al llamar a la funcion menu(), nos mostrara las posibles opciones
//Que desencadenaran el resto de llamadas a funciones dependiendo de lo que queramos ver, cargar o modificar. 
$bandera = TRUE;
while ($bandera == TRUE) {
    switch (menu()) {
        case 1:            
           echo $objViaje;            
            break;
        case 2:
            cargarInformacion($objViaje);
            break;
        case 3:
            ModificarInformacion($objViaje, $objPasajero, $objResponsable);
            break;
        case 0:            
            echo "Finalizo el programa.";
            $bandera = FALSE;
            break;
        default:
            echo "La opcion ingresada no es valida: Ingrese, 1,2,3 o 0. \n";
    }
}
