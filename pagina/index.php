<!-- Levi Josué Candeias de Figueiredo -->
<!DOCTYPE html>
<html>
    <head>
        <title>Tabla</title>
        <meta charset="utf-8" />
        <link href="css/reset.css" rel="stylesheet" />
        <link href="css/table.css" rel="stylesheet" />
        <link href="css/mainPage.css" rel="stylesheet" />
        <link href="css/form.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tabla de Factoriales</h1>
        <table>
            <tr>
                <th>Factorial del 0 al 10</th>
            </tr>    
            <?php
                require 'funciones.php';
                
                for ($i=0; $i <= 10; $i++) { 
                    $array[$i] = calcularFactorial($i);
                }

                foreach ($array as $i => $valor) {
                    echo "<tr><td>$i</td><td>$valor</td></tr>"; 
                }
            ?>
            <th>Levi Josué Candeias de Figueiredo</th>
        </table>
    </body>
</html>