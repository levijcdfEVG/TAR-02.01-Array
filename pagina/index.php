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
        <?php
            require 'funciones.php';
            
            for ($i=0; $i <= 10; $i++) { 
                $array[$i] = calcularFactorial($i);
            }

            foreach ($array as $i => $valor) {
                echo "<tr><td>$i</td><td>$valor</td></tr>"; 
            }
        ?>
        </table>    
        </div>
    </body>
</html>