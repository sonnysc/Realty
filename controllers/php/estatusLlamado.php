<?php
include('../../models/php/conn-vistas.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el estado del checkbox del formulario
    $id = $_POST['id'];
    $estado = $_POST["estado"];

    // Guardar el estado en un archivo o base de datos (en este caso, se guardará en un archivo de texto)
    $query = "UPDATE clientes SET llamado ='$estado' WHERE id_cliente = '$id'";
    $resultado = mysqli_query($conn, $query);
}
?>