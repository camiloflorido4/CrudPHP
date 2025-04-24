<?php
require '../config/database.php';

$sqlUsuarios = "SELECT id, nombre, apellido, celular, email, edad, fecha_nacimiento, direccion FROM usuarios";
$usuarios = $conn->query($sqlUsuarios);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion CRUD PHP</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Usuarios</h2>
        <div class="col-auto">
            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">Nuevo</a>
        </div>

        <table class="table table-info table-hover table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>edad</th>
                    <th>Fecha de nacimiento</th>
                    <th>Dirrección</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row_usuarios = $usuarios->fetch_assoc()) {   ?>
                    <tr>
                        <td><?= $row_usuarios['id'] ?></td>
                        <td><?= $row_usuarios['nombre'] ?></td>
                        <td><?= $row_usuarios['apellido'] ?></td>
                        <td><?= $row_usuarios['celular'] ?></td>
                        <td><?= $row_usuarios['email'] ?></td>
                        <td><?= $row_usuarios['edad'] ?></td>
                        <td><?= $row_usuarios['fecha_nacimiento'] ?></td>
                        <td><?= $row_usuarios['direccion'] ?></td>

                        <td>
                            <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal"
                                data-bs-id="<?= $row_usuarios["id"] ?>">Editar</a>
                            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal"
                                data-bs-id="<?= $row_usuarios["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>

    <?php
    $sql = "SELECT id, nombre, apellido, celular, email, edad, fecha_nacimiento, direccion FROM usuarios";
    $usuarios = $conn->query($sql)
    ?>
    <?php include 'nuevoModal.php' ?>
    <?php include 'editarModal.php' ?>
    <?php include 'eliminarModal.php' ?>

    <!-- traer los datos con JS para Editar modal -->
    <script>
        let editarModal = document.getElementById('editarModal');
        let eliminarModal = document.getElementById('eliminarModal');

        editarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inputId = editarModal.querySelector('.modal-body #id');
            let inputNombre = editarModal.querySelector('.modal-body #nombre');
            let inputApellido = editarModal.querySelector('.modal-body #apellido');
            let inputCelular = editarModal.querySelector('.modal-body #celular');
            let inputEmail = editarModal.querySelector('.modal-body #correo');
            let inputEdad = editarModal.querySelector('.modal-body #edad');
            let inputFechaNacimiento = editarModal.querySelector('.modal-body #fechadenacimiento');
            let inputDireccion = editarModal.querySelector('.modal-body #direccion');

            let url = "getUsuarios.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id;
                    inputNombre.value = data.nombre;
                    inputApellido.value = data.apellido;
                    inputCelular.value = data.celular;
                    inputEmail.value = data.email;
                    inputEdad.value = data.edad;
                    inputFechaNacimiento.value = data.fecha_nacimiento;
                    inputDireccion.value = data.direccion;

                }).catch(err => console.log(err));
        });

        /* Boton eliminar */
        eliminarModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminarModal.querySelector('.modal-footer #id').value = id;
        });
    </script>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>