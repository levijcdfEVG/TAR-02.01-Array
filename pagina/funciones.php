<?php 
    // Función que visualiza los elementos de un array utilizando un bucle for
    function visualizarArray($array){
        // Recorre cada elemento del array
        for ($i=0; $i < count($array); $i++) { 
            echo "$array[$i] <br/>"; // Imprime el elemento actual seguido de un salto de línea
        }
    }
    
    // Función que visualiza los elementos de un array utilizando un bucle foreach
    function visualizarArrayForEach($array){
        // Recorre cada elemento del array
        foreach ($array as $elemento) {
            echo $elemento . "<br>"; // Imprime el elemento actual seguido de un salto de línea
        }
    }

    // Función que calcula el factorial de un número
    function calcularFactorial($numero) {
        $factorial = 1; // Inicializa el valor del factorial
    
        // Si el número es 0, el factorial es 1 por definición
        if ($numero == 0) {
            return 1;
        }
        
        // Calcula el factorial multiplicando cada número desde 1 hasta el número dado
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i; // Multiplica el valor acumulado por el número actual
        }
    
        return $factorial; // Devuelve el resultado final
    }
?>
