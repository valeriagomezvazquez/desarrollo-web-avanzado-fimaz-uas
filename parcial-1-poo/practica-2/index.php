<?php

require_once "Admin.php";

$admin = new Admin("Valeria", "valeria@email.com");

echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol();

?>