<?php
    
    //Variables. PHP NO ES FUERTEMENTE TIPADO NO NECESITA TIPO DE DATO.\
    //Declaro String = cadena de texto
    $nombre ="Ricardo";
    $nombre2 ="Sebastian";
    $apellido = "Boggio";
    $apellido2 = "Echenique";

    
    //Declaro numericos
    $num1=10;
    $num2=3;

    //Operaciones aritmeticas con PHP
    $suma = $num1+$num2;
    $multiplicacion = $num1*$num2;
    $division=$num1/$num2;
    $modulo=$num1%$num2;

    //Declaro booleanos
    $condicion=5>1;
    $false=false;
    
    //Constantes. No cambian de valor.
           //(NOMBRE , VALOR)
    define('CURSO', 'programacion');
    define('NUMERO', 10.2);
    define('BOOLEAN',true);
    define('CONDI', false);
    
?>

    <!-- Estructura HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando PHP</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<h1> 
    <!-- TRABAJAMOS CON PHP -->
        <?php  
        echo var_dump($nombre); //Muestra el tipo de dato + valor
        echo "Mi nombre es $nombre<br>";
        echo "Mi otro nombre es $nombre2<br>";
        echo "Mi apellido es $apellido<br>";
        echo "Mi otro apellido es $apellido2<br>";
        echo "La suma de ($num1 + $num2) = $suma<br>";
        echo "La multiplicacion de $num1 * $num2 =$multiplicacion<br>";
        echo "La division de $num1/$num2 =$division<br>";
        echo "El modulo es de $num1%$num2 =$modulo<br>";
        echo "$condicion<br>";

        /* EL PUNTO SE USA TAMBIEN PARA CONCATENAR   */
        echo CURSO . "<br>";
        echo NUMERO . "<br>";
        echo BOOLEAN. "<br>";
        echo CONDI . "<br>";
        ?>
        
</h1>
</body>
</html>