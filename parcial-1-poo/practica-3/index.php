<?php

require_once "Admin.php";
require_once "Alumno.php";

echo "<h2>Sistema de Usuarios</h2>";

try {

    $admin = new Admin("Carlos", "carlos@empresa.com");

    echo "<p>";
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol();
    echo "</p>";

} catch (Exception $e) {

    echo "<p>Error: " . $e->getMessage() . "</p>";

}


try {

    $alumno = new Alumno("Valeria", "valeria@uas.edu.mx", "202300123");

    echo "<p>";
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol();
    echo "</p>";

} catch (Exception $e) {

    echo "<p>Error: " . $e->getMessage() . "</p>";

}


try {

    // Usuario con correo inválido para probar excepción
    $usuarioInvalido = new Admin("Pedro", "correo_invalido");

} catch (Exception $e) {

    echo "<p style='color:red;'>Error detectado: " . $e->getMessage() . "</p>";

}