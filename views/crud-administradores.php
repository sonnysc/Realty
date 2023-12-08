<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Administradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c18a7d19.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="css/crud-propiedades.css">
</head>

<?php include('../models/php/conn-vistas.php'); ?>
<?php include("navbar1.html");?>

<body>

    <div class="">

        <div class="row">

            <div class="col">

                <?php if (isset($_SESSION['mensaje'])) { ?>
                    <div class="alert alert-<?= $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show"
                        role="alert">
                        <?= $_SESSION['mensaje'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </div>

        </div>

        <div class="row" style="margin-top: 20px; text-align: right; margin-right: 10px;">

            <div class="col-12">
                <h1>CRUD Administradores</h1>
                <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormularioAdmin">
                    <i class="fas fa-plus"></i> Agregar agente
                </button>

                    <div class="modal fade" id="FormularioAdmin" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <form action="../controllers/php/guardar_nuevo_admin.php" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Agregar Agente</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Campos del formulario, ajusta según tus necesidades -->
                                        <div class="mb-3">
                                            <label for="correo" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="correo" name="correo" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="apellido1" class="form-label">Apellido1</label>
                                            <input type="text" class="form-control" id="apellido1" name="apellido1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="apellido2" class="form-label">Apellido2</label>
                                            <input type="text" class="form-control" id="apellido2" name="apellido2" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telefono" class="form-label">Teléfono</label>
                                            <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col">

                <div class="card card-body">
                    <table class="table table-hover table-striped" id="tablaAgentes">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido1</th>
                                <th scope="col">Apellido2</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tablaAgentesBody">
                            <?php
                            $query = "SELECT * FROM usuarios WHERE rol = '0'";
                            $resultado = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($resultado)) {
                                $id_admin = $row['id_usuario'];
                            ?>
                                <tr>
                                    <td><?= $row['id_usuario']; ?></td>
                                    <td><?= $row['correo']; ?></td>
                                    <td><?= $row['contrasena']; ?></td>
                                    <td><?= $row['nombre']; ?></td>
                                    <td><?= $row['apellido_1']; ?></td>
                                    <td><?= $row['apellido_2']; ?></td>
                                    <td><?= $row['telefono']; ?></td>
                                    <td>
                                        <button class="btn btn-info btn-sm ver-todos-clientes"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalClientesAdmin<?= $id_admin; ?>"
                                            data-admin-id="<?= $id_admin; ?>">Ver Clientes</button>
                                        <button class="btn btn-warning btn-sm">Editar</button>
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modalClientesAdmin<?= $id_admin; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Clientes del Agente: <?= $row['nombre']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Contenido dinámico cargado por JavaScript -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.html");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const verClientesButtons = document.querySelectorAll('.ver-todos-clientes');

            verClientesButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const adminId = this.getAttribute('data-admin-id');
                    const modalBody = document.querySelector(`#modalClientesAdmin${adminId} .modal-body`);

                    // Utiliza fetch para obtener la información de los clientes del archivo PHP
                    fetch(`../controllers/php/consultar_todos_clientes.php?id_usuario=${adminId}`)
                        .then(response => response.json()) // Parsea la respuesta como JSON
                        .then(data => {
                            // Construye el contenido del modal con la información de los clientes
                            let modalContent = '<ul>';
                            data.forEach(cliente => {
                                modalContent += `<li>${cliente.nombre}</li>`; // Ajusta según las columnas de tu tabla
                            });
                            modalContent += '</ul>';

                            modalBody.innerHTML = modalContent;
                        })
                        .catch(error => {
                            console.error('Error al cargar clientes:', error);
                        });
                });
            });
        });
    </script>
</body>

</html>
