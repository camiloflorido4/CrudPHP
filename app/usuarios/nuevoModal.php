<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Agregar usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardar.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control" placeholder="N° Celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="correo@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechadenacimiento" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
                        <input type="text" name="fechadenacimiento" id="fechadenacimiento" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirrecion de residencia" required>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div> 