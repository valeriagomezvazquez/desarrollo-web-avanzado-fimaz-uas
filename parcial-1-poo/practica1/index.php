<?php

require_once "Usuario.php";

$usuario = new Usuario("Valeria", "valeria@email.com");

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo();

?>