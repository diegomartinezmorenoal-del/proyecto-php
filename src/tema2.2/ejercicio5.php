<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $x = 144;
        $y = 999;

        echo "Valor de x: $x <br>";
        echo "Valor de y: $y <br><br>";

        echo "Suma ($x + $y): " . ($x + $y) . "<br>";
        echo "Resta ($x - $y): " . ($x - $y) . "<br>";
        echo "Multiplicación ($x * $y): " . ($x * $y) . "<br>";
        echo "División ($x / $y): " . round($x / $y, 4) . "<br>";
    ?>
</body>
</html>