<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Capacitación </h1>
    <br>
    <br>
    <h2> Profesional Solicitante </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Favor de introducir una capacitacion valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Rol</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir un Rol Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Rubro</label>
            <select class="form-select" id="validationCustom04" required>
                <option>Minería y Construcción</option>
                <option>Minería y Construcción</option>
                <option>Minería y Construcción</option>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Favor de introducir una razón social valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir una dirección valida
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
            <label for="formFileMultiple" class="form-label">Adjuntar Documentos</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div>
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" type="submit">Generar Capacitación</button>
        <button class="btn btn-warning col-2" type="submit">Cancelar</button>
    </div>
</div>