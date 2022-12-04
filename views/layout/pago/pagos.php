
<div class="card-body" style="margin: 2em 5em;">
    <h2> Pago de Servicios </h2>
    <br>
    <form id="registro_pago" class="row g-3 needs-validation">
        <h2>Datos de Cliente</h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" value="<?php echo $datos_pago['rol_cliente']?>"  disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" placeholder="" id="razon_social_cliente" name="razon_social_cliente=" value="<?php echo $datos_pago['razon_social_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" placeholder="" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datos_pago['direccion_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="telefono_cliente" name="rol_cliente" value="<?php echo $datos_pago['telefono_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email</label>
            <div class="input-group mb-3"> 
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_cliente" name="email_cliente" value="<?php echo $datos_pago['email_cliente']?>" disabled required>
            </div>
        </div>

        <h2>Datos de Plan</h2>
        <div class="col-md-6">
            <label for="nombre_plan" class="form-label">Nombre del Plan</label>
            <input type="text" class="form-control" placeholder="" id="nombre_plan" name="nombre_plan" value="<?php echo $datos_pago['nombre_plan']?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="fecha_fin_c" class="form-label">Fecha de Vencimiento</label>
            <input type="text" class="form-control" placeholder="" id="fecha_fin_c" name="fecha_fin_c" value="<?php echo $datos_pago['fecha_fin_c']?>" disabled required>
        </div>
        <div class="col-md-12">
            <label for="descripcion_plan" class="form-label">Descripción del Plan</label>
            <input type="text" class="form-control" placeholder="" id="descripcion_plan" name="descripcion_plan" value="<?php echo $datos_pago['descripcion_plan']?>" disabled required>
        </div>

        <h2>Datos de Pago</h2>
        <div class="col-md-3">
            <label for="monto_pago" class="form-label">Monto a Pagar</label>
            <div class="input-group mb-3">        
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" id="monto_pago" name="monto_pago" value="<?php echo $datos_pago['monto_plan']?>" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="tipo_documento" class="form-label">Tipo de Documento</label>
            <input type="text" class="form-control" placeholder="" id="tipo_documento" name="tipo_documento" value="<?php echo $datos_pago['tipo_documento']?>" disabled required>
        </div>
        <div class="col-md-3">
            <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento</label>
            <input type="text" class="form-control" placeholder="" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $datos_pago['fecha_vencimiento']?>" disabled required>
        </div>

    <br>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_cliente_c" name="id_cliente_c" value="<?php echo $datos_pago['id_cliente_c'] ?>">
        <input type="hidden" id="estado_pago" name="estado_pago" value="1">
        <input type="hidden" id="id_pago_servicio" name="id_pago_servicio" value="<?php echo $datos_pago['id_pago_servicio'] ?>">
    
    </form>
    <br><br><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarPago()">Pagar</button>
    </div>
    <br><br><br>

  
</div>


<script>

    /*(function() {

    document.getElementById('id_cliente_c').addEventListener('change', onChangeIdCliente)

    })()

    function onChangeIdCliente(event) {

    var id_cliente = document.getElementById('id_cliente_c').value;

    if (id_cliente && id_cliente > 0) {

        fetch("api.php/pago-servicio/cliente/" + id_cliente, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                document.getElementById('rol_cliente').value = datos.rol_cliente;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;                
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

                document.getElementById('nombre_plan').value = datos.nombre_plan;
                document.getElementById('fecha_vencimiento').value = datos.fecha_vencimiento;
                document.getElementById('descripcion_plan').value = datos.descripcion_plan;

                document.getElementById('monto_pago').value = datos.monto_plan;
                document.getElementById('tipo_documento').value = datos.tipo_documento;
                document.getElementById('fecha_vencimiento').value = datos.fecha_vencimiento;
                document.getElementById('id_pago_servicio').value = datos.id_pago_servicio;

            })

    }

    }*/

  

    function registrarPago(){
        //var fecha_pago=document.getElementById("fecha_pago").value;
        var id_pago_servicio=document.getElementById('id_pago_servicio').value;

        console.log(id_pago_servicio)
              

        /*if(id_tipo_pago_ps==undefined || id_tipo_pago_ps==null || id_tipo_pago_ps.trim()==""){
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

        }*/



        var datos_formulario = {

            id_pago_servicio:document.getElementById("id_pago_servicio").value,
            estado_pago:document.getElementById('estado_pago').value,

        }

        let formulario = new FormData(document.getElementById("registro_pago"))
        fetch('api.php/pago-servicio', {
            method: "post",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos_formulario)
        }).then((response) => {
            
            Swal.fire({
                title: 'Pago realizado exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            }).then((result) => {
                location.reload();
            })

                //Mensaje Administrativo
                fetch("api.php/personal_administrativo", {
                    method: "get"
                }).then(response => response.json())
                .then((datos) => {

                    console.dir(datos)
                    
                    for (const key in datos) {

                        crearNotificacion("El Cliente " + document.getElementById('razon_social_cliente').value + " a realizado un pago", 0, 0, datos[key].id_personal, 0, "pago")

                    }

                })
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
        console.dir(formulario)
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