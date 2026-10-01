<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <pre>
<?php
    $base = 9;
    $filas = ($base + 1) / 2; // 5 filas

    for ($i = 1; $i <= $filas; $i++) {
        // Imprimir espacios iniciales
        for ($j = 1; $j <= $filas - $i; $j++) {
            echo " ";
        }
        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
?>
    </pre>
</body>
</html>