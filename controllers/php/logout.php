<?php
// Inicia la sesión si no está iniciada
session_start();

// Destruye todas las variables de sesión
session_unset();
session_destroy();

// Redirige al usuario a la página de inicio de sesión o a donde desees
header("Location: ../../index.php");
exit;

?>
