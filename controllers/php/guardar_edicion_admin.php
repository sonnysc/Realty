<?php
include('../../models/php/conn-vistas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_admin = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena']; // No se utiliza password_hash
    $apellido1 = $_POST['apellido_1'];
    $apellido2 = $_POST['apellido_2'];
    $telefono = $_POST['telefono'];

    // Ajusta la consulta para incluir todos los campos que deseas actualizar
    $query = "UPDATE usuarios SET nombre = ?, correo = ?, contrasena = ?, apellido_1 = ?, apellido_2 = ?, telefono = ? WHERE id_usuario = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ssssssi', $nombre, $correo, $contrasena, $apellido1, $apellido2, $telefono, $id_admin);

    if (mysqli_stmt_execute($stmt)) {
        // Actualización exitosa, redirige o muestra un mensaje
        header('Location: ../../views/crud-administradores.php');
        exit();
    } else {
        // Manejar errores en la actualización
        echo 'Error al guardar los cambios: ' . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo 'Acceso no autorizado';
}

mysqli_close($conn);
?>
