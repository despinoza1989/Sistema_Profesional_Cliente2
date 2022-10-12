<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="crear_asesoria" class="row g-3 needs-validation">

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
            <textarea type="text" class="form-control" rows="10" cols="40" id="detalle_asesoria" name="detalle_asesoria" placeholder="Favor de ingresar el motivo de la asesoria..."></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        
        <input type="hidden" id="id_cliente_sa" name="id_cliente_sa" value="1">

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="crearAsesoria()">Solicitar Asesoría</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>
    function crearAsesoria(){
        var detalle_asesoria=document.getElementById("detalle_asesoria").value;
        console.log( detalle_asesoria)

      
        if(detalle_asesoria==undefined || detalle_asesoria==null || detalle_asesoria.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe de completar el campo',                
                })            
            return;

        }


        let formulario = new FormData(document.getElementById("crear_asesoria"))
        fetch('index.php?view=crear-asesoria', {
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