<?php

require_once "Usuario.php";
require_once "Admin.php";
require_once "Alumno.php";

$usuarios = [];

try {

    $admin = new Admin("Rossy Bautista", "rossy@bautista.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Valeria Salas", "valeria@salas.com", "A12345");
    $usuarios[] = $alumno;

    // Usuario con correo inválido para probar excepción
    $alumnoInvalido = new Alumno("Arleth Gonzalez", "arlethqgmail.com", "A99999");
    $usuarios[] = $alumnoInvalido;

} catch (Exception $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
</head>
<body>

<h2>Usuarios</h2>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Rol</th>
    <th>Matricula</th>
</tr>

<?php
foreach ($usuarios as $u) {
    echo "<tr>";
    echo "<td>" . $u->getNombre() . "</td>";
    echo "<td>" . $u->getCorreo() . "</td>";
    echo "<td>" . $u->getRol() . "</td>";

    if ($u instanceof Alumno) {
        echo "<td>" . $u->getMatricula() . "</td>";
    } else {
        echo "<td>-</td>";
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>