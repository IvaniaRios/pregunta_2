<?php include 'base.php'; ?>
  <div class="container">
  <h2 class="titulo">Ingrese los datos de la persona:</h2>
    <form action="guardar_persona.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"  class="form-control" required><br>

        <label for="paterno">Apellido Paterno:</label>
        <input type="text" id="paterno" name="paterno" class="form-control" required><br>

        <label for="materno">Apellido Materno:</label>
        <input type="text" id="materno" name="materno"  class="form-control" required><br>

        <label for="departamento">Departamento:</label>
        <select name="departamento" id="departamento" >
        <option value="La Paz">La Paz</option>
        <option value="Oruro">Oruro</option>
        <option value="Potosi">Potosi</option>
        <option value="Beni">Beni</option>
        <option value="Cochabamba">Cochabamba</option>
        <option value="Sucre">Sucre</option>
        <option value="Tarija">Tarija</option>
        <option value="Pando">Pando</option>
        <option value="Santa Cruz">Santa Cruz</option>
    </select>
<br><br>
        <label for="ci">Cedula de Identidad:</label>
        <input type="number" id="ci" name="ci"  class="form-control"><br>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol" >
        <option value="Admin">Admin</option>
        <option value="Director">Director</option>
        <option value="Usuario">Usuario</option>

    </select><br>
<br>
        <input type="submit" class="btn btn1" value="Crear Persona">
    </form>

  </div>