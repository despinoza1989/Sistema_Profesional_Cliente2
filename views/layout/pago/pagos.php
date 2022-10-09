
<div class="card-body" style="margin: 2em 5em;">
    <h2> Pago de Servicios </h2>
    <br>
    <form id="registro_pago" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuariocliente['rol_cliente']?>"  disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" placeholder="" id="razon_social_cliente" name="razon_social_cliente=" value="<?php echo $datosusuariocliente['razon_social_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" placeholder="" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datosusuariocliente['direccion_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" value="<?php echo $datosusuariocliente['telefono_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email</label>
            <div class="input-group mb-3"> 
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_cliente" name="email_cliente" value="<?php echo $datosusuariocliente['email_cliente']?>" disabled required>
            </div>
        </div>

        <div class="col-md-6">
            <label for="id_tipo_documento_ps" class="form-label">Tipo de Documento</label>
            <select class="form-select" id="id_tipo_documento_ps" name="id_tipo_documento_ps" required>
                <option selected disabled value="">Seleccione Tipo de Documento</option>
                <?php foreach ($datos_tipodocumento as $row){ ?>
                    <option value="<?php echo $row["id_tipo_documento"] ?>"><?php echo $row["tipo_documento"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="id_tipo_pago_ps" class="form-label">Modo de Pago</label>
            <select class="form-select" id="id_tipo_pago_ps" name="id_tipo_pago_ps" required>
                <option selected disabled value="">Seleccione Tipo de Pago</option>
                <?php foreach ($datos_tipopago as $row){ ?>
                    <option value="<?php echo $row["id_tipo_pago"] ?>"><?php echo $row["tipo_pago"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="col-md-2">
            <label for="monto_pago" class="form-label">Monto a Pagar</label>
            <div class="input-group mb-3">        
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" id="monto_pago" name="monto_pago" value="160.000" disabled>
            </div>
        </div>
        <div class="col-md-2">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="datetime-local" class="form-control" id="fecha_pago" name="fecha_pago" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
    <br>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="estado_pago" name="estado_pago" value="Pagado">
        <input type="hidden" id="id_plan_servicio_ps" name="id_plan_servicio_ps" value="1">
        <input type="hidden" id="id_cliente_ra" name="id_cliente_ra" value="<?php echo $datosusuariocliente['id_cliente']?>">
    
    </form>
    <br><br><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarPago()">Pagar</button>
    </div>
    <br><br><br>

  
</div>


<script>
    function registrarPago(){
        var id_tipo_pago_ps=document.getElementById("id_tipo_pago_ps").value;
        var id_tipo_documento_ps=document.getElementById("id_tipo_documento_ps").value;
              

        if(id_tipo_pago_ps==undefined || id_tipo_pago_ps==null || id_tipo_pago_ps.trim()==""){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se deben seleccionar un metodo de pago',                
                })            
            return;

        }

        if(id_tipo_documento_ps==undefined || id_tipo_documento_ps==null || id_tipo_documento_ps.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe seleccionar un tipo de documento',                
                })            
            return;

        }


        let formulario = new FormData(document.getElementById("registro_pago"))
        fetch('index.php?view=pago-servicio', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Pago realizado exitosamente',
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
        console.dir(formulario)
    }   

</script>