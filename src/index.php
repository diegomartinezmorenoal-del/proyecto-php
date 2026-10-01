<?php
$servidor = "db";
$usuario = "usuario";
$password = "1234";
$basedatos = "instituto";

$conexion = new mysqli(
    $servidor,
    $usuario,
    $password,
    $basedatos
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "<h1>Conexión realizada correctamente</h1>";
?>
<h1>Ejercicios - Tema 2.2</h1>
    
    <ul>
        <li><a href="tema2.2/ejercicio1.php">Ejercicio 1</a></li>
        <li><a href="tema2.2/ejercicio2.php">Ejercicio 2</a></li>
        <li><a href="tema2.2/ejercicio3.php">Ejercicio 3</a></li>
        <li><a href="tema2.2/ejercicio4.php">Ejercicio 4</a></li>
        <li><a href="tema2.2/ejercicio5.php">Ejercicio 5</a></li>
        <li><a href="tema2.2/ejercicio6.php">Ejercicio 6</a></li>
        <li><a href="tema2.2/ejercicio7.php">Ejercicio 7</a></li>
        <li><a href="tema2.2/ejercicio8.php">Ejercicio 8</a></li>
        <li><a href="tema2.2/ejercicio9.php">Ejercicio 9</a></li>
        <li><a href="tema2.2/ejercicio10.php">Ejercicio 10</a></li>
        <li><a href="tema2.2/ejercicio11.php">Ejercicio 11</a></li>
        <li><a href="tema2.2/ejercicio12.php">Ejercicio 12</a></li>
    </ul>