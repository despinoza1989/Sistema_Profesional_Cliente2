 <!-- BARRA DE MENUS LATERAL-->
 <div class="card-body" style="margin: 2em 5em;">
    <h1> Detalle Respuesta Asesoria</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2> 
    <br>
    <form id="visualizar_respuesta_asesoria" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" placeholder="" id="rut_personal" name="rut_personal" disabled required>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="" id="nombre_personal" name="nombre_personal" disabled required>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" placeholder="" id="apellidos_personal" name="apellidos_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="telefono_personal" name="telefono_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">Email</label>
            <div class="input-group mb-3"> 
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_personal" name="email_personal" disabled required>
            </div>
        </div>
        <br>
        <br>
       
        <div class="col-md-12">
            <label for="respuesta_asesoria" class="form-label">Detalle de la Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="respuesta_asesoria" name="respuesta_asesoria" disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

   
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_vt" name="id_personal_vt" value="1">
        <input type="hidden" id="id_cliente_vt" name="id_cliente_vt" value="1"> 

    </form>
    <br>
    <br>

</div>


<script>

    (function(){

    document.getElementById('id_solicitud_asesoria_ra').addEventListener('change', onChangeAsesoria)
    document.getElementById('id_solicitud_asesoria_ra').value = document.getElementById('id_solicitud_asesoria_ra').value;
    
    onChangeAsesoria({})

    })()

    function onChangeAsesoria(event){

        var id_solicitud_asesoria= document.getElementById('id_solicitud_asesoria_ra').value;
        console.log(id_solicitud_asesoria)

        if(id_solicitud_asesoria && id_solicitud_asesoria>1){

            fetch("api.php/solicitud-asesoria/" + id_solicitud_asesoria, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('id_solicitud_asesoria_ra').value=datos.id_solicitud_asesoria;
                document.getElementById('tipo_asesoria').value=datos.tipo_asesoria;
                document.getElementById('rol_cliente').value=datos.rol_cliente;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
                document.getElementById('detalle_asesoria').value=datos.detalle_asesoria;


            })

        }

    }
   

</script>
