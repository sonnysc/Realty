<?php
// Archivo: consultar_clientes_admin.php

// Incluye la conexión a la base de datos
include('../../models/php/conn-vistas.php');

// Verifica si se proporcionó un ID de administrador
if (isset($_GET['id_usuario'])) {
    $id_admin = $_GET['id_usuario'];

    // Usa una declaración preparada para prevenir inyección SQL
    $query = "SELECT * FROM clientes WHERE id_usuario = ?";
    
    // Prepara la consulta
    $stmt = mysqli_prepare($conn, $query);
    
    // Vincula el parámetro
    mysqli_stmt_bind_param($stmt, 'i', $id_admin);

    // Ejecuta la consulta
    mysqli_stmt_execute($stmt);

    // Obtiene los resultados
    $result = mysqli_stmt_get_result($stmt);

    // Comprueba si hay resultados
    if ($result) {
        // Obtiene los resultados como un array JSON
        $clientes = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($clientes);
    } else {
        // Maneja cualquier error en la consulta
        echo json_encode(['error' => 'Error al consultar clientes: ' . mysqli_error($conn)]);
    }

    // Cierra la declaración preparada
    mysqli_stmt_close($stmt);
} else {
    // Maneja el caso en que no se proporcionó un ID de administrador
    echo json_encode(['error' => 'ID de administrador no proporcionado']);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
