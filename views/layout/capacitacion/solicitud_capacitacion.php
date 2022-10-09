<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Capacitacion </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="solicitud_capacitacion" class="row g-3 needs-validation" >
    <div class="col-md-4">
            <label for="nombre_solicitud_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_solicitud_capacitacion" name="nombre_solicitud_capacitacion"  required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-4">
            <label for="fecha_solicitud_capacitacion" class="form-label">Fecha Capacitacion</label>
            <input type="datetime-local" class="form-control" id="fecha_solicitud_capacitacion" name="fecha_solicitud_capacitacion" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
        <div class="col-md-4">
            <label for="tipo_personal_capacitacion" class="form-label">Tipo Personal a Capacitar</label>
            <select class="form-select" id="tipo_personal_capacitacion" name="tipo_personal_capacitacion" required>
            <option selected disabled value="">Seleccione Tipo de Personal a Capacitar</option>
                <?php foreach ($datos_tipo_personal_capacitacion as $row){ ?>
                    <option value="<?php echo $row["id_tipo_personal_capacitacion"] ?>"><?php echo $row["tipo_personal_capacitacion"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuariocliente['rol_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="<?php echo $datosusuariocliente['razon_social_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" value="<?php echo $datosusuariocliente['telefono_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-3">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datosusuariocliente['direccion_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email </label>
            <input type="text" class="form-control" id="email_cliente" name="email_cliente" value="<?php echo $datosusuariocliente['email_cliente'] ?>" disabled required>
        </div>
            <input type="hidden" id="accion" name="accion" value="registrar">
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="solicitudCapacitacion()">Solicitar Capacitacion</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>
     function solicitudCapacitacion(){
        var nombre_solicitud_capacitacion=document.getElementById("nombre_solicitud_capacitacion").value;
        var fecha_solicitud_capacitacion=document.getElementById("fecha_solicitud_capacitacion").value;
        console.log(nombre_solicitud_capacitacion,fecha_solicitud_capacitacion)


        if(nombre_capacitacion==undefined || nombre_capacitacion==null || nombre_capacitacion.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre',                
                })            
            return;

        }
       
    

        let formulario = new FormData(document.getElementById("solicitud_capacitacion"))
        fetch('index.php?view=solicitud-capacitacion', {
            method: "post",
            body: formulario
        }).then((response) => {
                
            Swal.fire({
                title: 'Solicitud creada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
                }).then((result) => {
                    location.reload();
                })
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
        }

</script>


