<?php
require("conexion_BD.php");

$consulta = "SELECT * FROM clases;";
$resultado = ErrorConsulta($mysqli, $consulta);

$columns = mysqli_fetch_fields($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mostrar_datos_clases.css">
    <title>Datos de CLASES</title>
</head>

<body>
    <?php
    echo "<table>";
    echo "<tr>";
    foreach ($columns as $column) {
        echo "<th>" . $column->name . "</th>";
    }
    echo "</tr>";

    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['dia'] . "</td>";
        echo "<td>" . $fila['hora'] . "</td>";
        echo "<td>" . $fila['sala'] . "</td>";
        echo "<td>" . $fila['materia'] . "</td>";
        echo "<td>" . $fila['dniAlumno'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>