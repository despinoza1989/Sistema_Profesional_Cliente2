<div class="card-body" style="margin: 2em 5em;">
    <h1> Solicitar Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="crear_asesoria" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente" required>
            <option selected disabled value="">Seleccione Rol</option>
                <?php foreach ($datos_rol as $row){ ?>
                    <option value="<?php echo $row["id_cliente"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
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
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" value="" required>
            <div class="invalid-feedback">
                Favor de introducir una razón social valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
            <div class="valid-feedback">
                Favor de introducir una dirección valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email" name="email"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div> 
        </div>
        <div class="col-md-12">
            <label for="detalle_asesoria" class="form-label">Descripción Asesoría</label>
            <textarea  type="text" class="form-control" id="detalle_asesoria" name="detalle_asesoria" required></textarea>
            <div class="invalid-feedback">
                Favor de introducir una descripcion valida
            </div>
        </div>

        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_tipo_asesoria_sa" name="id_tipo_asesoria_sa" value="1">
        <input type="hidden" id="id_cliente_sa" name="id_cliente_sa" value="1">

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="crearAsesoria()">Generar Asesoría</button>
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