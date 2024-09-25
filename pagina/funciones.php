<?php 
    function visualizarArray($array){
        for ($i=0; $i < count($array); $i++) { 
            echo "$array[$i] <br/>";
        }
    }
    
    function visualizarArrayForEach($array){
        foreach ($array as $color) {
            echo $color . "<br>";
        }
    }

    function calcularFactorial($numero) {
        $factorial = 1;
    
        if ($numero == 0) {
            return 1;
        }
        
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
    
        return $factorial;
    }
    
?>