<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        table, th, td { border: 1px solid #333; border-collapse: collapse; text-align: center; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Horario de Clase</h2>
  <table>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <td>8:15 - 9:15</td>
            <td><?php echo "DWEC"; ?></td>
            <td><?php echo "PROYECTO"; ?></td>
            <td><?php echo "INGLES"; ?></td>
            <td><?php echo "DWES"; ?></td>
            <td><?php echo "DWEC"; ?></td>
        </tr>
        <tr>
            <td>9:15 - 10:15</td>
            <td>DWEC</td>
            <td>PROYECTO</td>
            <td>DWES</td>
            <td>DWES</td>
            <td>DWEC</td>
        </tr>
        <tr>
            <td>10:15 - 11:15</td>
            <td><?php echo "DWEC"; ?></td>
            <td><?php echo "OPTATIVA"; ?></td>
            <td><?php echo "DWES"; ?></td>
            <td><?php echo "DWES"; ?></td>
            <td><?php echo "DWEC"; ?></td>
        </tr>
        <tr>
            <td>11:15 - 11:45</td>
            <td colspan="5">RECREO</td>
        </tr>
        <tr>
            <td>11:45 - 12:45</td>
            <td><?php echo "INGLES"; ?></td>
            <td><?php echo "OPTATIVA"; ?></td>
            <td><?php echo "DIW"; ?></td>
            <td><?php echo "DIW"; ?></td>
            <td><?php echo "DIW"; ?></td>
        </tr>
        <tr>
            <td>12:45 - 13:45</td>
            <td>DWES</td>
            <td>DAW</td>
            <td>IPE2</td>
            <td>DIW</td>
            <td>DIW</td>
        </tr>
        <tr>
            <td>13:45 - 14:45</td>
            <td><?php echo "DWES"; ?></td>
            <td><?php echo "DAW"; ?></td>
            <td><?php echo "IPE2"; ?></td>
            <td><?php echo "IPE2"; ?></td>
            <td><?php echo "OPTATIVA"; ?></td>
        </tr>
    </table>
</body>
</html>