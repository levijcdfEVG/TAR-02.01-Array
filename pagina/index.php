<!-- Levi Josué Candeias de Figueiredo -->
<!DOCTYPE html>
<html>
    <head>
        <title>Tabla</title>
        <meta charset="utf-8" />
        <!-- Enlaza las hojas de estilo CSS para el diseño de la página -->
        <link href="css/reset.css" rel="stylesheet" />
        <link href="css/table.css" rel="stylesheet" />
        <link href="css/mainPage.css" rel="stylesheet" />
        <link href="css/form.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tabla de Factoriales</h1>
        <table>
            <tr>
                <th colspan="2">Factorial del 0 al 10</th> <!-- Encabezado de la tabla -->
            </tr>    
            <?php
                require 'funciones.php'; // Incluye el archivo de funciones PHP
                
                // Calcula el factorial para los números del 0 al 10 y los guarda en un array
                for ($i=0; $i <= 10; $i++) { 
                    $array[$i] = calcularFactorial($i); // Llama a la función para calcular el factorial
                }

                // Muestra cada número y su respectivo factorial en la tabla
                foreach ($array as $i => $valor) {
                    echo "<tr><td>$i</td><td>$valor</td></tr>"; // Imprime el número y su factorial
                }
            ?>
            <tr>
                <th colspan="2">Levi Josué Candeias de Figueiredo</th> <!-- Pie de la tabla -->
            </tr> 
        </table>
    </body>
</html>
