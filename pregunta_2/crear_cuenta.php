<?php include 'base.php'; ?>
<div class="container">


<h2>Crear Cuenta Bancaria</h2>
    <form action="guardar_cuenta.php" method="POST">
        <label for="persona">Selecciona una persona:</label>
        <select name="persona" required>
            <?php
            // Conexión a la base de datos
            include './coneccion.php';

            // Consulta para obtener las personas
            $query = "SELECT id_persona, nombre, paterno, materno FROM persona";
            $result = $conn->query($query);

            // Mostrar opciones en el menú desplegable
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_persona'] . "'>" . $row['nombre'] . " " . $row['paterno'] . " " . $row['materno'] . "</option>";
                }
            } else {
                echo "<option value='' disabled>No hay personas disponibles</option>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </select><br>

        <label for="usuario">Nombre de Usuario:</label>
        <input  class="form-control" type="text" id="usuario" name="usuario" required><br>

        <label for="contrasenia">Contraseña:</label>
        <input   class="form-control" type="password" id="contrasenia" name="contrasenia" required><br>

        <label for="monto">Monto Inicial:</label>
        <input class="form-control" type="number" id="monto" name="monto" min="0" step="0.01" required><br>
        <label for="tipo_cuenta">Tipo de Cuenta:</label><br>
        <select name="tipo_cuenta" id="tipo_cuenta" >
        <option value="Caja de Ahorro Pro-TECCION">Caja de Ahorro Pro-TECCION</option>
        <option value="Caja de Ahorro Prodem PLUS ">Caja de Ahorro Prodem PLUS </option>
        <option value="Caja de Ahorro Pro-RENTABLE">Caja de Ahorro Pro-RENTABLE</option>
        <option value="Deposito a Plazo Fijo Pro-YECCION">Depósito a Plazo Fijo Pro-YECCION</option>

    </select><br>
<br>
        <input type="submit" class="btn btn1" value="Crear Cuenta">
    </form>

</div>