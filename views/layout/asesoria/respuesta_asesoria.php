<div class="card-body" style="margin: 2em 5em;">
    <h1> Respuesta Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="reportar_asesoria" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="tipo_asesoria" class="form-label">Tipo de asesoría</label>
            <select class="form-select" id="tipo_asesoria" name="tipo_asesoria" required>
            <option selected disabled value="">Tipo de asesoría</option>
                <?php foreach ($datos_tipo_asesoria as $row){ ?>
                    <option value="<?php echo $row["id_tipo_asesoria"] ?>"><?php echo $row["tipo_asesoria"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div> 
        </div>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente"  required>
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
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>

        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="inputGroupPrepend" disabled required>
                <div class="invalid-feedback">
                </div>
            </div> 
        </div>
        <div class="col-md-12">
            <label for="detalle_asesoria" class="form-label">Detalle de la Asesoría</label>
            <textarea type="text" name="comentarios" class="form-control" rows="10" cols="40" id="detalle_asesoria" name="detalle_asesoria" placeholder="Detalle de la asesoría" disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>


        <div class="col-md-12">
            <label for="respuesta_asesoria" class="form-label">Respuesta de la Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="respuesta_asesoria" name="respuesta_asesoria" placeholder="Detalle de la asesoría"></textarea>
            <div class="invalid-feedback">
            </div>
        </div>



        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_solicitud_asesoria_ra" name="id_solicitud_asesoria_ra" value="1">
        <input type="hidden" id="id_personal_sa" name="id_personal_sa" value="1">
        

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="respuestaAsesoria()">Enviar Respuesta</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>


<script>
    function respuestaAsesoria(){
        var respuesta_asesoria=document.getElementById("respuesta_asesoria").value;
        console.log( respuesta_asesoria)

      
        if(respuesta_asesoria==undefined || respuesta_asesoria==null || respuesta_asesoria.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe de completar el campo',                
                })            
            return;

        }


        let formulario = new FormData(document.getElementById("reportar_asesoria"))
        fetch('index.php?view=respuesta-asesoria', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Asesoria reportada exitosamente',
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


<script> 

(function(){

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
    
}


</script>