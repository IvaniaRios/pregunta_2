<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $id_cuenta = $_POST['id_cuenta'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $monto = $_POST['monto'];
    $tipo_cuenta = $_POST['tipo_cuenta'];

    include './coneccion.php';
    // Actualizar los datos en la tabla 'cuenta_bancaria'
    $sql = "UPDATE cuenta_bancaria 
            SET usuario = '$usuario', contrasenia = '$contrasenia', monto = $monto, tipo_cuenta = '$tipo_cuenta'
            WHERE id_cuenta = $id_cuenta";

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
    // Si no se ha enviado el formulario, redirigir a la página anterior
    header("Location: modificar_cuenta.php");
    exit();
}
?>
