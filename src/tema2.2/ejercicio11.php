<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   
</head>
<body>
    <pre>
<?php
    $filas = 5;

    for ($i = 1; $i <= $filas; $i++) {
        // Espacios iniciales
        for ($j = 1; $j <= $filas - $i; $j++) {
            echo " ";
        }
        // Asteriscos y espacios interiores
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            
            if ($k == 1 || $k == (2 * $i - 1) || $i == $filas) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
?>
    </pre>
</body>
</html>