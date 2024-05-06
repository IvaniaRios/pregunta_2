<?php
// Conexión a la base de datos
include './coneccion.php';
include 'base.php';
// Consulta para obtener las cuentas bancarias de cada persona
$query = "SELECT persona.id_persona,persona.nombre, persona.paterno, persona.rol,persona.materno, cuenta_bancaria.*
          FROM persona
          LEFT JOIN cuenta_bancaria ON persona.id_persona = cuenta_bancaria.id_persona";
$result = $conn->query($query);
echo '<div class="container">';

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    echo "<h2>Cuentas Bancarias de las Personas:</h2>";
    // Mostrar los resultados en una tabla
    echo "<table border='1' class='table'>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Rol</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Monto</th>
                <th>Tipo de Cuenta</th>
                <th>Acciones</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['nombre'] . "</td>
                <td>" . $row['paterno'] . "</td>
                <td>" . $row['materno'] . "</td>
                <td>" . $row['rol'] . "</td>
                <td>" . $row['usuario'] . "</td>
                <td>" . $row['contrasenia'] . "</td>
                <td>" . $row['monto'] . "</td>
                <td>" . $row['tipo_cuenta'] . "</td>
                <td><a class='btn btn1' href='modificar_cuenta.php?id_cuenta=" . $row['id_cuenta'] . "'>Modificar Cuenta</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron cuentas bancarias.";
}

// Cerrar la conexión
$conn->close();
echo '</div>';
?>
