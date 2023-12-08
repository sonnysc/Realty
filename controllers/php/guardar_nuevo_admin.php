<?php
include('../../models/php/conn-vistas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $apellido1 = $_POST['apellido1']; // Cambiado de 'apellido_1' a 'apellido1'
    $apellido2 = $_POST['apellido2']; // Cambiado de 'apellido_2' a 'apellido2'
    $telefono = $_POST['telefono'];

    // Validación adicional si es necesario

    $query = "INSERT INTO usuarios (nombre, correo, contrasena, apellido_1, apellido_2, telefono, rol) VALUES (?, ?, ?, ?, ?, ?, '0')";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        // Manejar errores al preparar la consulta
        die('Error al preparar la consulta: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ssssss', $nombre, $correo, $contrasena, $apellido1, $apellido2, $telefono);

    if (mysqli_stmt_execute($stmt)) {
        // Inserción exitosa, redirige
        header('Location: ../../views/crud-administradores.php');
        exit();
    } else {
        // Manejar errores en la inserción
        die('Error al agregar el administrador: ' . mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
} else {
    // Acceso no autorizado
    echo 'Acceso no autorizado';
}

mysqli_close($conn);
?>
