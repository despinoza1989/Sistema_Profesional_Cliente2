<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Capacitacion </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="Ingrese Rol, Ejemplo: (11111111-3) " id="rol_cliente" name="rol_cliente" value="" maxlength="10" required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="id_rubro" class="form-label">Rubro</label>
            <select class="form-select" id="id_rubro" name="id_rubro" required>
                <option selected disabled value="">Seleccione Rubro</option>
                <?php foreach ($datos_rubro as $row){ ?>
                    <option value="<?php echo $row["id_rubro"] ?>"><?php echo $row["tipo_rubro"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="" required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" required>
            <div class="invalid-feedback">
                Please provide a valid city.
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
    function registrarCapacitacion(){
        var nombre_capacitacion=document.getElementById("nombre_capacitacion").value;
        var link_capacitacion=document.getElementById("link_capacitacion").value;
        console.log(rut_personal, telefono_personal)

        



        if(nombre_capacitacion==undefined || nombre_capacitacion==null || nombre_capacitacion.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre',                
                })            
            return;

        }
       
    }

</script>


