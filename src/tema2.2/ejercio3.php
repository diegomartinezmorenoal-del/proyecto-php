<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>English</th>
            <th>Español</th>
        </tr>
        <?php
            $diccionario = [
                "Apple" => "Manzana",
                "Computer" => "Ordenador",
                "Book" => "Libro",
                "House" => "Casa",
                "Water" => "Agua",
                "Sun" => "Sol",
                "Moon" => "Luna",
                "Dog" => "Perro",
                "Cat" => "Gato",
                "Tree" => "Árbol"
            ];

            foreach ($diccionario as $ingles => $español) {
                echo "<tr><td>$ingles</td><td>$español</td></tr>";
            }
        ?>
    </table>
</body>
</html>