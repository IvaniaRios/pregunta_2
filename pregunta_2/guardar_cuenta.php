<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $id_persona = $_POST['persona'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $monto = $_POST['monto'];
    $tipo_cuenta = $_POST['tipo_cuenta'];

    include './coneccion.php';

    // Insertar los datos en la tabla 'cuenta_bancaria'
    $sql = "INSERT INTO cuenta_bancaria (usuario, contrasenia, monto, tipo_cuenta, id_persona) 
            VALUES ('$usuario', '$contrasenia', $monto, '$tipo_cuenta', $id_persona)";

if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a otra página
    header('Location: mostrar_cuentas.php');
    exit(); // Asegura que el script se detenga aquí
} else {
    echo "Error al crear persona: " . $conn->error;
}

    // Cerrar la conexión
    $conn->close();
} else {
    // Si no se ha enviado el formulario, redirigir al formulario de creación de cuenta
    header("Location: formulario_cuenta.php");
    exit();
}
?>
