<?php
    include("../../models/php/conn-vistas.php");
    if(isset($_GET['id_propiedad'])) {
        $id_propiedad = $_GET['id_propiedad'];

        $query = "DELETE FROM propiedades WHERE id_propiedad = '$id_propiedad'";
        $resultado = mysqli_query($conn, $query);

        if($resultado){
            $_SESSION['mensaje'] = 'Propiedad eliminada';
            $_SESSION['mensaje_tipo'] = 'success';
        }else{
            $_SESSION['mensaje'] = 'Proceso fallido';
            $_SESSION['mensaje_tipo'] = 'danger';
        }
        header("Location: ../../views/crud-propiedades.php");
    }
?>