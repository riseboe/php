<?php

echo "Estructura de selección multiple (SWITCH)<br>";


$dia=2;

switch($dia){

    case 1:
        echo "Corresponde a Lunes";
    break;                            //Break significa sale del caso y finaliza.

    case 2:
        echo "Corresponde a Martes";
    break;

    case 3:
        echo "Corresponde a Miercoles";
    break;

    case 4:
        echo "Corresponde a Jueves";
    break;

    case 5:
        echo "Corresponde a Viernes";
    break;

    case 6:
        echo "Corresponde a Sabado";
    break;

    case 7:
        echo "Corresponde a Domingo";
    break;

    default:                        // Default por si no ingresa una de las 7 opciones.
        echo "Incorrecto!";
    break;

}

echo "<br>";




echo match ($dia) {
    1 => "Lunes" ,
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",

    default => "Incorrecto!"
};

?>




