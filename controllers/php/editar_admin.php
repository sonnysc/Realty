<?php
include('../../models/php/conn-vistas.php');

// Verifica si la solicitud es de tipo GET y si se proporcionó un ID de usuario
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_usuario'])) {
    $id_admin = $_GET['id_usuario'];

    // Verifica si se envió el formulario para guardar cambios
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Aquí puedes procesar y guardar los cambios en la base de datos
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena']; // Eliminado el uso de password_hash
        $apellido1 = $_POST['apellido_1'];
        $apellido2 = $_POST['apellido_2'];
        $telefono = $_POST['telefono'];

        $query = "UPDATE usuarios SET nombre=?, correo=?, contrasena=?, apellido_1=?, apellido_2=?, telefono=? WHERE id_usuario=?";
        $stmt = mysqli_prepare($conn, $query);

        if (!$stmt) {
            die('Error al preparar la consulta: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, 'ssssssi', $nombre, $correo, $contrasena, $apellido1, $apellido2, $telefono, $id_admin);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Cambios guardados correctamente';
        } else {
            echo 'Error al ejecutar la consulta: ' . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }

    // Continúa con la lógica para mostrar los datos del administrador en el modal de edición
    $query = "SELECT * FROM usuarios WHERE id_usuario = ?";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die('Error al preparar la consulta: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'i', $id_admin);

    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        $admin = mysqli_fetch_assoc($result);

        // Aquí puedes utilizar $admin para obtener los datos del administrador

        // Por ejemplo, imprime el nombre
        echo "Nombre del administrador: " . $admin['nombre'];

        // Aquí puedes incluir el formulario para editar los datos del administrador
        ?>
        <form action="" method="post">
            <!-- Campos del formulario -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $admin['nombre']; ?>" required>
            
            <!-- Agrega los demás campos del formulario según tus necesidades -->

            <input type="submit" value="Guardar cambios">
        </form>
        <?php
    } else {
        echo 'Error al ejecutar la consulta: ' . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo 'ID de usuario no proporcionadoo';
}

mysqli_close($conn);
?>
