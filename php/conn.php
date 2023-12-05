<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $conn = mysqli_connect("localhost","root","","realty");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>