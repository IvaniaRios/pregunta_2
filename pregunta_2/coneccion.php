<?php
$direccion = "localhost"; // Nombre del servidor
$usuario_MySQL = "root"; // Nombre de usuario de MySQL
$contrasenia__MySQL = ""; // Contraseña de MySQL
$nomb_BD = "bdivania"; // Nombre de la base de datos
// Crear conexión
$conn = new mysqli($direccion, $usuario_MySQL, $contrasenia__MySQL, $nomb_BD);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
