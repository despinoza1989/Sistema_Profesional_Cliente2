<div class="card-body" style="margin: 2em 5em;">
    <h1> Detalle Respuesta Asesoria</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form id="detalle_respuesta_asesoria" class="row g-3 needs-validation">

        <input type="hidden" id="id_respuesta_asesoria" name="id_respuesta_asesoria"
            value="<?php echo $datos_respuesta_asesoria['id_respuesta_asesoria'] ?>">

        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" placeholder="" id="rut_personal" name="rut_personal" disabled
                required>
        </div>

        <div class="col-md-6">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="" id="nombre_personal" name="nombre_personal" disabled
                required>
        </div>

        <div class="col-md-6">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" placeholder="" id="apellidos_personal" name="apellidos_personal"
                disabled required>
        </div>

        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="telefono_personal" name="telefono_personal"
                disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_personal" class="form-label">Email</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_personal" name="email_personal"
                    disabled required>
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-12">
            <label for="respuesta_asesoria" class="form-label">Detalle de Respuesta del Profesional</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="respuesta_asesoria"
                name="respuesta_asesoria" disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

        <input type="hidden" id="id_cliente_sa" name="id_cliente_sa"
            value="<?php echo $datosusuariocliente['id_cliente'] ?>">

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning col-2" href="index.php?view=listar-respuesta-asesoria">Volver Atrás</a>
    </div>

</div>


<script>
(function() {

    document.getElementById('id_respuesta_asesoria').addEventListener('change', onChangeDetalleRespuestaAsesoria)
    document.getElementById('id_respuesta_asesoria').value = document.getElementById('id_respuesta_asesoria').value;

    onChangeDetalleRespuestaAsesoria({})

})()

function onChangeDetalleRespuestaAsesoria(event) {

    var id_respuesta_asesoria = document.getElementById('id_respuesta_asesoria').value;
    console.log(id_respuesta_asesoria, "ID Respueta")

    if (id_respuesta_asesoria && id_respuesta_asesoria > 0) {

        fetch("api.php/respuesta-asesoria/" + id_respuesta_asesoria, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.log(datos)

                document.getElementById('id_respuesta_asesoria').value = datos.id_respuesta_asesoria;
                document.getElementById('rut_personal').value = datos.rut_personal;
                document.getElementById('nombre_personal').value = datos.nombre_personal;
                document.getElementById('apellidos_personal').value = datos.apellidos_personal;
                document.getElementById('telefono_personal').value = datos.telefono_personal;
                document.getElementById('email_personal').value = datos.email_personal;
                document.getElementById('respuesta_asesoria').value = datos.respuesta_asesoria;


            })

    }

}
</script>