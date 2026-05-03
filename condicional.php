<?php
    /* Operadores matemáticos 
    Suma (+)
    Resta(-)
    Multiplicación (*)
    División (/)
    Modulo-Resto (%)
    
    */

    /* Operadores relacionales
    Mayor (>)
    Menor (<)
    Mayor o igual (>=)
    Menor o igual (<=)
    Asignacion (=)
    Comparacion (==)
    Distinto (!=)
    
    */

    /*Operadores logicos
    AND (&&)
    OR  (||)
    NOT (!)
    */

    
    $a=5;  //Variables
    $b=3;   


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de control condicional!</title>
</head>
<body>
    <h1>
        ¡Estructura de control condicional!
    </h1>
    <hr>
    <h2>IF/ELSE/ELSEIF

        <br>

        <?php
        if($a>$b){
            echo "$a es mayor a $b.";
        }elseif($b>$a){
            echo "$b es mayor a $a.";
        }else{
            echo "Son iguales.";

        }

        ?>


    </h2>
    <hr>    
    <h2>Operador ternario</h2>

    <?php
     $total= $a>$b ? "$a es mayor $b" :($b>$a ? "$b es mayor a $a" : "Son iguales.");
    ?>
    <p>
    <?php
    echo "$total";
    ?>

    </p>
    


    
</body>
</html>