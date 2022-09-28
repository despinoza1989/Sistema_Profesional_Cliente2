  <!-- BARRA DE MENUS LATERAL-->
        <div class="card-body" style="margin: 2em 5em;">
    <h1> Agendar Visita en Terreno</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="id_personal" class="form-label">Selecciona el profesional a cargo de la visita</label>
            <select class="form-select" id="id_personal" name="id_personal" required>
                <option selected disabled value="">Seleccione Rut</option>
                <?php foreach ($datos_personal as $row){ ?>
                    <option value="<?php echo $row["id_personal"] ?>">Rut: <?php echo $row["rut_personal"] ?> |  Nombre: <?php echo $row["nombre_personal"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" required>
            <div class="valid-feedback">
                Favor de introducir un nombre Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" required>
            <div class="valid-feedback">
                Favor de introducir un apellido Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" required>
            <div class="invalid-feedback">
                Favor de introducir un telefono valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">Correo</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal" required>
            <div class="invalid-feedback">
                Favor de introducir un correo Valido
            </div>
        </div>
        <br>
        <br>
        <h2>Selección de Cliente</h2>
        <br>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="id_cliente" name="id_cliente" required>
                <option selected disabled value="">Seleccione Rol</option>
                <?php foreach ($datos_cliente as $row){ ?>
                    <option value="<?php echo $row["id_cliente"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" required>
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <label for="agendamiento_visita_cliente" class="form-label">Fecha Visita</label>
            <input type="date" class="form-control" id="agendamiento_visita_cliente" name="agendamiento_visita_cliente" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="motivo_visita_cliente" class="form-label">Motivo Visita</label>
            <textarea type="text" name="comentarios" class="form-control" rows="10" cols="40" id="motivo_visita_cliente" name="motivo_visita_cliente" placeholder="Escribe el motivo de la visita.."></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" type="submit">Agendar Visita</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>



