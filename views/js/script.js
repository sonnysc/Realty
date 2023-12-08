// Archivo: script.js

// Función para cargar y mostrar los clientes de un administrador
function verClientes(idAdmin) {
    // Realiza una solicitud AJAX para obtener los clientes de un administrador específico
    $.ajax({
        url: 'consultar_todos_admin.php',
        type: 'GET',
        dataType: 'json',
        data: { id_admin: idAdmin },
        success: function (data) {
            // Manipula los datos para mostrarlos como desees
            var modalBody = $('#clientesBody' + idAdmin);
            modalBody.empty();

            if (data.length > 0) {
                // Construye la tabla de clientes
                var table = $('<table class="table table-bordered"></table>');
                var thead = $('<thead><tr><th>ID</th><th>Nombre</th></tr></thead>');
                var tbody = $('<tbody></tbody>');

                data.forEach(function (cliente) {
                    var row = $('<tr><td>' + cliente.id + '</td><td>' + cliente.nombre + '</td></tr>');
                    tbody.append(row);
                });

                table.append(thead);
                table.append(tbody);
                modalBody.append(table);
            } else {
                modalBody.text('No hay clientes disponibles para este administrador.');
            }
        },
        error: function (error) {
            console.error('Error al cargar clientes:', error);
        }
    });
}

