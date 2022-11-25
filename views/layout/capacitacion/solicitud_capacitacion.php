<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Capacitación </h1>
    <br>
    <br>
    <form id="solicitar_capacitacion" class="row g-3 needs-validation">
        <h2>Datos Solicitud Capacitación </h2>
        <br>
        <div class="col-md-4">
            <label for="nombre_solicitud_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_solicitud_capacitacion"
                name="nombre_solicitud_capacitacion" placeholder="Ingrese un Nombre de Capacitación, Ejemplo: Uso Correcto de EPP " required>
        </div>
        <div class="col-md-4">
            <label for="fecha_solicitud_capacitacion" class="form-label">Fecha a Solicitar Capacitación</label>
            <input type="date" class="form-control" id="fecha_solicitud_capacitacion"
                name="fecha_solicitud_capacitacion" required>
        </div>
        <div class="col-md-4">
            <label for="id_tipo_personal_s" class="form-label">Tipo Personal a Capacitar</label>
            <select class="form-select" id="id_tipo_personal_s" name="id_tipo_personal_s" required>
                <option selected disabled value="">Seleccione Tipo de Personal a Capacitar</option>
                <?php foreach ($datos_tipo_personal_capacitacion as $row){ ?>
                <option value="<?php echo $row["id_tipo_personal_capacitacion"] ?>">
                    <?php echo $row["tipo_personal_capacitacion"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <br>
        <br>
        <br>
        <h2> Cliente Solicitante </h2>
        <br>
        <div class="col-md-4">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente"
                value="<?php echo $datosusuariocliente['rol_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-4">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente"
                value="<?php echo $datosusuariocliente['razon_social_cliente'] ?>" disabled required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente"
                value="<?php echo $datosusuariocliente['telefono_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-4">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente"
                value="<?php echo $datosusuariocliente['direccion_cliente'] ?>" disabled required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-4">
            <label for="email_cliente" class="form-label">Email </label>
            <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                value="<?php echo $datosusuariocliente['email_cliente'] ?>" disabled required>
        </div>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_cliente_s" name="id_cliente_s"
            value="<?php echo $datosusuariocliente['id_cliente'] ?>">
        <input type="hidden" id="razon_social_cliente" name="razon_social_cliente" value="<?php echo $datosusuariocliente['razon_social_cliente'] ?>">

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="solicitarCapacitacion()">Solicitar Capacitación</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>
    function solicitarCapacitacion() {
        var nombre_solicitud_capacitacion = document.getElementById("nombre_solicitud_capacitacion").value;
        var fecha_solicitud_capacitacion = document.getElementById("fecha_solicitud_capacitacion").value;
        var id_tipo_personal_s = document.getElementById("id_tipo_personal_s").value;
        console.log(nombre_solicitud_capacitacion, fecha_solicitud_capacitacion, id_tipo_personal_s)


        if (nombre_solicitud_capacitacion == undefined || nombre_solicitud_capacitacion == null ||
            nombre_solicitud_capacitacion.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre de la solicitud de la capacitación',
            })
            return;

        }

        if (fecha_solicitud_capacitacion == undefined || fecha_solicitud_capacitacion == null ||
            fecha_solicitud_capacitacion.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una fecha valida',
            })
            return;

        }

        var fecha = new Date(fecha_solicitud_capacitacion);
        var ahora = new Date();
        var dias_milisegundos = fecha.getTime() - ahora.getTime();
        var dias_diferencia = dias_milisegundos/(1000*60*60*24)

        console.log(ahora, 'Fecha Ahora')
        console.log(fecha_solicitud_capacitacion, 'check')
        console.log(dias_milisegundos, 'diferencia milisegundos')
        console.log(dias_diferencia, 'diferencia dias')

        if(dias_diferencia<2){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La Fecha a solicitar la capacitación debe ser con al menos 2 días de anticipación',                
                })            
            return;
        }


        if (id_tipo_personal_s == undefined || id_tipo_personal_s == null || id_tipo_personal_s.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el tipo personal a capacitar',
            })
            return;

        }


        let formulario = new FormData(document.getElementById("solicitar_capacitacion"))
        fetch('index.php?view=solicitar-capacitacion', {
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

            //Mensaje Profesional
            var id_cliente= document.getElementById('id_cliente_s').value;

            if(id_cliente && id_cliente>0){

                fetch("api.php/asignacion-profesional-cliente/" + id_cliente, {
                    method: "get"            
                }).then(response=>response.json())
                .then((datos)=>{

                    console.dir(datos, "Datos Profesional")
                    
                    for (const key in datos) {

                    crearNotificacion("El Cliente " + document.getElementById('razon_social_cliente').value + " a solicitado una capacitación, para el " + document.getElementById('fecha_solicitud_capacitacion').value.replace('T', ' '), 0, 0, datos[key].id_personal_ap, 0, "solicitar_capacitacion")

                    }

                })

            }

            //Mensaje Administrativo
            fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                
                for (const key in datos) {

                    crearNotificacion("El Cliente " + document.getElementById('razon_social_cliente').value + " a solicitado una capacitación, para el " + document.getElementById('fecha_solicitud_capacitacion').value.replace('T', ' '), 0, 0, datos[key].id_personal, 0, "solicitar_capacitacion")

                }

            })           
            /*acciones a realizar*/
        }).then((data) => {
            /*mas acciones a realizar*/
        })
    }

    function crearNotificacion(mensaje_notificacion, estado_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion){
        
        var request = {

            mensaje_notificacion: mensaje_notificacion,
            estado_notificacion: estado_notificacion,
            is_cliente: is_cliente,
            custom_user_id: custom_user_id,
            custom_option_id: custom_option_id,
            tipo_notificacion: tipo_notificacion

        }

        fetch('api.php/notificaciones', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(request)
        }).then((response) => {
            
            console.log(response)
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
    }

</script>