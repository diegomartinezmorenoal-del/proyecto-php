<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   
</head>
<body>
    <?php
        $euros = 10;
        $tasa_cambio = 166.386;
        $pesetas = $euros * $tasa_cambio;

        echo "<p>$euros € equivalen a " . round($pesetas) . " pesetas.</p>";
    ?>
</body>
</html>