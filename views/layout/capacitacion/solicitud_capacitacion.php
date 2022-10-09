<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Capacitacion </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuario['rol_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="<?php echo $datosusuario['razon_social_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" value="<?php echo $datosusuario['telefono_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datosusuario['direccion_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email </label>
            <input type="text" class="form-control" id="email_cliente" name="email_cliente" value="<?php echo $datosusuario['email_cliente'] ?>" disabled required>
        </div>
            <input type="hidden" id="accion" name="accion" value="registrar">
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="solicitudAsesoria()">Solicitar Asesoria</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>
    function solicitudAsesoria(){
        var link_capacitacion=document.getElementById("link_capacitacion").value;
        console.log(rut_personal, telefono_personal)
       
    }

</script>


