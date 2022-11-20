  <!-- BARRA DE MENUS LATERAL-->
  <div class="card-body" style="margin: 2em 5em;">
    <h1> Reporte de Accidente</h1>
    <br>
    <br>
    <form id="reporte_accidente" class="row g-3 needs-validation" >
        
        <div class="col-md-3">
            <div class="mb-2">
                <label for="cantidad_personas" class="form-label">Cantidad de Personas Involucradas</label>
                <input type="text" class="form-control" id="cantidad_personas" name="cantidad_personas" value="" min="1" required>
            </div>

            <div class="mb-2">
                <label for="fecha_accidente" class="form-label">Fecha del Accidente</label>
                <input type="date" class="form-control" id="fecha_accidente" name="fecha_accidente" required>
            </div>
        </div>        
            <div class="col-md-6">
                <label for="detalle_accidente" class="form-label" >Detalles del Accidente</label>
                <textarea type="text" class="form-control" id="detalle_accidente" name="detalle_accidente" rows="3" required style="height: 300px;"></textarea>
            </div>
       
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_cliente_ra" name="id_cliente_ra" value="<?php echo $datosusuariocliente['id_cliente']?>">
        <input type="hidden" id="razon_social_cliente" name="razon_social_cliente" value="<?php echo $datosusuariocliente['razon_social_cliente'] ?>">


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarAccidente()">Reportar Accidente</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>



<script>

    function registrarAccidente(){

        var cantidad_personas=document.getElementById("cantidad_personas").value;
        var fecha_accidente=document.getElementById("fecha_accidente").value;
        var detalle_accidente=document.getElementById("detalle_accidente").value;
               

        if(cantidad_personas==undefined || cantidad_personas==null || cantidad_personas.trim()=="" || !validacion.validarPersonasInvolucradas(cantidad_personas)){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se deben ingresar solo números en la cantidad de personas involucradas.',                
                })            
            return;

        }

        if(fecha_accidente==undefined || fecha_accidente==null || fecha_accidente.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe ingresar la fecha ocurrido el accidente',                
                })            
            return;

        }

        if(detalle_accidente==undefined || detalle_accidente==null || detalle_accidente.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe el detalle del accidente',                
                })            
            return;

        }

        let formulario = new FormData(document.getElementById("reporte_accidente"))
        fetch('index.php?view=reporte-accidente', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Reporte de Accidente realizado exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            }).then((result) => {
                location.reload();
            })


            //Mensaje Profesional
            var id_cliente= document.getElementById('id_cliente_ra').value;

            if(id_cliente && id_cliente>0){

                fetch("api.php/asignacion-profesional-cliente/" + id_cliente, {
                    method: "get"            
                }).then(response=>response.json())
                .then((datos)=>{

                    console.dir(datos, "Datos Profesional")
                    
                    for (const key in datos) {

                    crearNotificacion("El Cliente " + document.getElementById('razon_social_cliente').value + " a reportado un accidente", 0, 0, datos[key].id_personal_ap, 0, "reporte_accidente")

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

                    crearNotificacion("El Cliente " + document.getElementById('razon_social_cliente').value + " a reportado un accidente", 0, 0, datos[key].id_personal, 0, "reporte_accidente")

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