<?php
// ... Puedes incluir la conexión a la base de datos si es necesario ...

// ... Aquí deberías tener un formulario para agregar un nuevo administrador ...
?>

<!-- Formulario de agregar -->
<form method="post" action="guardar_nuevo_admin.php">
    <!-- Campos del formulario para los detalles del nuevo administrador -->
    <label>Nombre: <input type="text" name="nombre"></label>
    <!-- Agrega más campos según sea necesario -->

    <input type="submit" value="Agregar Administrador">
</form>
