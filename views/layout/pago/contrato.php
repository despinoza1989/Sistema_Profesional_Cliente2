<div class="card-body" style="margin: 2em 5em;">
    <center><h1>Contrato</h1></center>
    <br>

    <form id="" class="row g-3 needs-validation" novalidate>
        <h2> Datos del Cliente </h2>
        <div class="col-md-6">
        <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled
                value="" required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>
        <br><br>          
        <h2>Datos para Contrato</h2>

        <div class="col-md-2">
            <label for="nombre_plan" class="form-label">Tipo Plan</label>
            <input type="text" class="form-control" id="nombre_plan" name="nombre_plan" disabled required>
        </div>
               
        <div class="col-md-3">
            <label for="tipo_documento" class="form-label">Tipo Documento</label>
            <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" disabled required>
        </div>

        <div class="col-md-2">
            <label for="monto_plan" class="form-label">Monto del Plan</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
                <input type="text" class="form-control" id="monto_plan" name="monto_plan"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <div class="col-md-2">
            <label for="fecha_inicio_c" class="form-label">Fecha de Incio del Contrato</label>
            <input type="date" class="form-control" id="fecha_inicio_c" name="fecha_inicio_c" disabled required>
        </div>

        <div class="col-md-2">
            <label for="fecha_fin_c" class="form-label">Fecha de Termino del Contrato</label>
            <input type="date" class="form-control" id="fecha_fin_c" name="fecha_fin_c" disabled required>
        </div>

        <div class="col-md-1">
            <label for="dia_pago" class="form-label">Día de Pago</label>
            <input type="text" class="form-control" id="dia_pago" name="dia_pago" disabled required>
        </div>

        <div class="col-md-12">
            <label for="descripcion_plan" class="form-label">Descripción del Plan</label>
            <input type="text" class="form-control" id="descripcion_plan" name="descripcion_plan" disabled required>
        </div>


        <br><br><br><br>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_contrato" name="id_contrato" value="<?php echo $datos_contrato['id_contrato'] ?>">
        <input type="hidden" id="finalizado" name="finalizado" value="">
        

    </form>
    <br><br><br>

</div>

<script>


    (function() {

        document.getElementById('id_contrato').addEventListener('change', onChangeIdContrato)

        onChangeIdContrato({})

    })()

    function onChangeIdContrato(event) {

        var id_contrato = document.getElementById('id_contrato').value;

        if (id_contrato && id_contrato > 0) {

            fetch("api.php/contrato/" + id_contrato, {
                    method: "get"
                }).then(response => response.json())
                .then((datos) => {

                    console.dir(datos)
                    document.getElementById('id_contrato').value = datos.id_contrato;
                    document.getElementById('rol_cliente').value = datos.rol_cliente;
                    document.getElementById('tipo_rubro').value = datos.tipo_rubro;
                    document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                    document.getElementById('email_cliente').value = datos.email_cliente;
                    document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                    document.getElementById('telefono_cliente').value = datos.telefono_cliente;

                    
                    document.getElementById('finalizado').value = datos.finalizado;
                    document.getElementById('nombre_plan').value = datos.nombre_plan;
                    document.getElementById('tipo_documento').value = datos.tipo_documento;
                    document.getElementById('monto_plan').value = datos.monto_plan;
                    document.getElementById('fecha_inicio_c').value = datos.fecha_inicio_c;
                    document.getElementById('fecha_fin_c').value = datos.fecha_fin_c;
                    document.getElementById('dia_pago').value = datos.dia_pago;
                    document.getElementById('descripcion_plan').value = datos.descripcion_plan;
                    
                    

                })

        }

    }
</script>