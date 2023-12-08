<?php
include('../../models/php/conn-vistas.php');

if (isset($_GET['id'])) {
    $id_admin = $_GET['id'];

    $query = "DELETE FROM usuarios WHERE id_usuario = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id_admin);

    if (mysqli_stmt_execute($stmt)) {
        // Eliminación exitosa, redirige o muestra un mensaje
        header('Location: ../../views/crud-administradores.php');
        exit();
    } else {
        // Manejar errores en la eliminación
        echo 'Error al eliminar el administrador: ' . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo 'ID de administrador no proporcionado';
}

mysqli_close($conn);
?>
