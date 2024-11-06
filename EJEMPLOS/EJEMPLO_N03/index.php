<?php
// Simulación de una verificación simple
$usuario = "admin";
$contraseña = "1234";

// $usuario = "usuario";
// $contraseña = "5678";

// Verificar si el usuario es correcto
if ($usuario !== "admin" || $contraseña !== "1234") {
    die("Acceso denegado. Verifique sus credenciales."); // Termina el script si las credenciales no son correctas
}

echo "Bienvenido, $usuario"; // Si las credenciales son correctas, muestra un mensaje de bienvenida
?>
