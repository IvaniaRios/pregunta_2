<?php
// Conexión a la base de datos
include './coneccion.php';

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$departamento = $_POST['departamento'];
$ci = $_POST['ci'];
$rol = $_POST['rol'];

// Insertar los datos en la tabla 'persona'
$sql = "INSERT INTO persona (nombre, paterno, materno, departamento, ci, rol) 
        VALUES ('$nombre', '$paterno', '$materno', '$departamento', '$ci', '$rol')";


if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a otra página
    header('Location: base.php');
    exit(); // Asegura que el script se detenga aquí
} else {
    echo "Error al crear persona: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
