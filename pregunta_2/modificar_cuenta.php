<?php
// Verificar si se ha proporcionado el ID de la cuenta
if (isset($_GET['id_cuenta'])) {
    $id_cuenta = $_GET['id_cuenta'];

    include './coneccion.php';


    // Consulta para obtener los datos de la cuenta
    $query = "SELECT * FROM cuenta_bancaria WHERE id_cuenta = $id_cuenta";
    $result = $conn->query($query);

    // Verificar si se encontró la cuenta
    if ($result->num_rows > 0) {
        $cuenta = $result->fetch_assoc();
    } else {
        echo "No se encontró la cuenta.";
        exit();
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "ID de cuenta no proporcionado.";
    exit();
}
?>
<?php include 'base.php'; ?>
<div class="container">
    
<h2 class="titulo">Modificar Cuenta Bancaria</h2>
    <form action="actualizar_cuenta.php" method="POST">
        <input type="hidden" name="id_cuenta" value="<?php echo $cuenta['id_cuenta']; ?>">
        
        <label for="usuario">Usuario:</label>
        <input  class="form-control" type="text" id="usuario" name="usuario" value="<?php echo $cuenta['usuario']; ?>" required><br><br>

        <label for="contrasenia">Contraseña:</label>
        <input class="form-control" type="password" id="contrasenia" name="contrasenia" value="<?php echo $cuenta['contrasenia']; ?>" required><br><br>

        <label for="monto">Monto (solo lectura):</label>
        <input  class="form-control" type="number" id="monto" name="monto" value="<?php echo $cuenta['monto']; ?>" min="0" step="0.01" readonly><br><br>


        <label for="tipo_cuenta">Tipo de Cuenta (actual: <?php echo $cuenta['tipo_cuenta']; ?>):</label><br>
        <select name="tipo_cuenta" id="tipo_cuenta" >
        <option value="Caja de Ahorro Pro-TECCION">Caja de Ahorro Pro-TECCION</option>
        <option value="Caja de Ahorro Prodem PLUS ">Caja de Ahorro Prodem PLUS </option>
        <option value="Caja de Ahorro Pro-RENTABLE">Caja de Ahorro Pro-RENTABLE</option>
        <option value="Deposito a Plazo Fijo Pro-YECCION">Depósito a Plazo Fijo Pro-YECCION</option>

    </select><br><br>
        <input type="submit" class="btn btn1" value="Actualizar Cuenta">
    </form>


</div>