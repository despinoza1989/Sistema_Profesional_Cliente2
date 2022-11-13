<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="solicitar_asesoria" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="id_tipo_asesoria_sa" class="form-label">Tipo de asesoría</label>
            <select class="form-select" id="id_tipo_asesoria_sa" name="id_tipo_asesoria_sa" required>
            <option selected disabled value="">Seleccione el tipo de asesoría</option>
                <?php foreach ($datos_tipo_asesoria as $row){ ?>
                    <option value="<?php echo $row["id_tipo_asesoria"] ?>"><?php echo $row["tipo_asesoria"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div> 
        </div>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuariocliente['rol_cliente']?>"  disabled required>
        </div>
        
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" placeholder="" id="razon_social_cliente" name="razon_social_cliente=" value="<?php echo $datosusuariocliente['razon_social_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuariocliente['telefono_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" placeholder="" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datosusuariocliente['direccion_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email</label>
            <div class="input-group mb-3"> 
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_cliente" name="email_cliente" value="<?php echo $datosusuariocliente['email_cliente']?>" disabled required>
            </div>
        </div>

        <div class="col-md-12">
            <label for="detalle_asesoria" class="form-label">Descripción Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="detalle_asesoria" name="detalle_asesoria" placeholder="Favor de ingresar el motivo de la asesoría..."></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        
        <input type="hidden" id="id_cliente_sa" name="id_cliente_sa" value="<?php echo $datosusuariocliente['id_cliente']?>">
    
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="solicitarAsesoria()">Solicitar Asesoría</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>

    function solicitarAsesoria(){

        var detalle_asesoria=document.getElementById("detalle_asesoria").value;
        var id_tipo_asesoria_sa=document.getElementById("id_tipo_asesoria_sa").value;

        console.log( detalle_asesoria, id_tipo_asesoria_sa)

        if(id_tipo_asesoria_sa==undefined || id_tipo_asesoria_sa==null || id_tipo_asesoria_sa.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar el tipo de Asesoría',                
                })            
            return;

        }

        if(detalle_asesoria==undefined || detalle_asesoria==null || detalle_asesoria.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe de completar el campo Descripción Asesoría',                
                })            
            return;

        }


        let formulario = new FormData(document.getElementById("solicitar_asesoria"))

        fetch('index.php?view=solicitar-asesoria', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Asesoria solicitada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            }).then((result) => {
                location.reload();
            })

            //Mensaje Profesional
            var id_cliente= document.getElementById('id_cliente_sa').value;

            if(id_cliente && id_cliente>0){

                fetch("api.php/asignacion-profesional-cliente/" + id_cliente, {
                    method: "get"            
                }).then(response=>response.json())
                .then((datos)=>{

                    console.dir(datos)
                    
                    for (const key in datos) {

                    crearNotificacion("El Cliente a solicitado una asesoría nueva", 0, 0, datos[key].id_personal_ap, 0, "solicitar_asesoria")

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

                    crearNotificacion("El Cliente a solicitado una asesoría nueva", 0, 0, datos[key].id_personal, 0, "solicitar_asesoria")

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

    /*(function(){

        document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

    })()

    function onChangeRol(event){

        var id_cliente= document.getElementById('rol_cliente').value;
        
        if(id_cliente && id_cliente>0){

            fetch("api.php/cliente/" + id_cliente, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;

            })

        }
        
    }*/


</script>