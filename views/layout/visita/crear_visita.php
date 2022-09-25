  <!-- BARRA DE MENUS LATERAL-->
        <div class="card-body" style="margin: 2em 5em;">
    <h1> Agendar Visita en Terreno</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label" >Rut</label>
            <input type="text" class="form-control" id="validationCustom05" required disabled="disabled">
            <div class="invalid-feedback">
                Favor de introducir un rut válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir un nombre Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir un apellido Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Favor de introducir un telefono valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Correo</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir un correo Valido
            </div>
        </div>
        <br>
        <br>
        <h2>Selección de Cliente</h2>
        <br>

        <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Rol</label>
            <select class="form-select" id="validationCustom04" required>
                <option>76.898.567-6</option>
                <option>78.454.343-7</option>
                <option>79.456.224-7</option>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Agendamiento Visita</label>
            <input type="date" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" type="submit">Generar Mejora</button>
        <button class="btn btn-warning col-2" type="submit">Cancelar</button>
    </div>
</div>
