<div class="card-body" style="margin: 2em 5em;">
    <h1> Lista de Check </h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form id="registro_check" class="row g-3 needs-validation">

        <div class="container">



            <div class="row">
                <!-- ROW -->

                <div class="col-md-6">
                    <label for="rut_personal" class="form-label">Rut</label>
                    <input type="text" class="form-control" id="rut_personal" name="rut_personal"
                        value="<?php echo $datosusuario['rut_personal']?>" disabled required>
                </div>
                <div class="col-md-3">
                    <label for="nombre_personal" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre_personal" name="nombre_personal"
                        value="<?php echo $datosusuario['nombre_personal']?>" disabled required>
                    <div class="valid-feedback">
                        Favor de introducir un nombre Valido
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="apellidos_personal" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal"
                        value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
                    <div class="valid-feedback">
                        Favor de introducir un apellido Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="telefono_personal" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono_personal" name="telefono_personal"
                        value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
                    <div class="invalid-feedback">
                        Favor de introducir un telefono valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email_personal" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="email_personal" name="email_personal"
                        change="onChangeRol" value="<?php echo $datosusuario['email_personal']?>" disabled required>
                    <div class="invalid-feedback">
                        Favor de introducir un correo Valido
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <h2>Selección de Cliente</h2>
                <br>

                <div class="col-md-6">
                    <label for="rol_cliente" class="form-label">Rol</label>
                    <select class="form-select" id="rol_cliente" name="rol_cliente" required>
                        <option selected disabled value="">Seleccione Rol</option>
                        <?php foreach ($dato_asignacion as $row){ ?>
                            <option value="<?php echo $row["id_asignacion_profesional"] ?>"><?php echo $row["rol_cliente"] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="razon_social_cliente" class="form-label">Razón Social</label>
                    <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente"
                        disabled required>
                    <div class="invalid-feedback">
                        Favor de escoger una opcion valida
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="telefono_cliente" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled
                        required>
                    <div class="invalid-feedback">
                        Favor de introducir un telefono Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="direccion_cliente" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled
                        required>
                    <div class="invalid-feedback">
                        Favor de introducir una direccion Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email_cliente" class="form-label">E-mail</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                            aria-describedby="inputGroupPrepend" disabled required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- COL 1 -->


                    <div class="mb-2">
                        <label for="fecha_check_list" class="form-label">Fecha Check-List (La fecha debe ser mayor o
                            igual a 15 días)</label>
                        <input type="datetime-local" class="form-control" id="fecha_check_list" name="fecha_check_list"
                            required>
                    </div>
                </div>
                <br>
                <h2>Chequeos Generales </h2>

            </div><!-- COL 1 -->
            <br>
            <div class="col-5">
                <!-- COL 2 -->

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="senaleticas" name="senaleticas">
                    <label class="form-check-label" for="senaleticas">
                        Señaleticas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estado_contratos" name="estado_contratos">
                    <label class="form-check-label" for="estado_contratos">
                        Estado de contratos
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estado_extintores" name="estado_extintores">
                    <label class="form-check-label" for="estado_extintores">
                        Estado de extintores
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="instalaciones_electricas"
                        name="instalaciones_electricas">
                    <label class="form-check-label" for="instalaciones_electricas">
                        Instalaciones eléctricas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="instalaciones_sanitarias"
                        name="instalaciones_sanitarias">
                    <label class="form-check-label" for="instalaciones_sanitarias">
                        Instalaciones sanitarias
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="libro_asistencia" name="libro_asistencia">
                    <label class="form-check-label" for="libro_asistencia">
                        Libro de asistencia
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="alarma_incendios" name="alarma_incendios">
                    <label class="form-check-label" for="alarma_incendios">
                        Alarma de incendios
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="alumbrado_emergencia"
                        name="alumbrado_emergencia">
                    <label class="form-check-label" for="alumbrado_emergencia">
                        Alumbrado de emergencia
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="salidas_emergencia" name="salidas_emergencia">
                    <label class="form-check-label" for="salidas_emergencia">
                        Salidas de emergencia
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="documentacion_trabajador"
                        name="documentacion_trabajador">
                    <label class="form-check-label" for="documentacion_trabajador">
                        Documentación trabajador
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agua_potable" name="agua_potable">
                    <label class="form-check-label" for="agua_potable">
                        Agua potable
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="centro_mutual" name="centro_mutual">
                    <label class="form-check-label" for="centro_mutual">
                        Centro mutual
                    </label>
                </div>
                <br>
                <div class="mb-2">
                    <label for="obs_check_general" class="form-label">Observación Chequeo General</label>
                    <textarea type="text" class="form-control" id="obs_check_general" name="obs_check_general" rows="3"
                        required style="height: 200px;"></textarea>
                </div>
                <br>
                <h2>Chequeos de Protección </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="protectores_auditivos"
                        name="protectores_auditivos">
                    <label class="form-check-label" for="protectores_auditivos">
                        Protectores auditivos
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="casco_seguridad" name="casco_seguridad">
                    <label class="form-check-label" for="defaucasco_seguridadltCheck2">
                        Casco de seguridad
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="zapato_seguridad" name="zapato_seguridad">
                    <label class="form-check-label" for="zapato_seguridad">
                        Zapatos de seguridad
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="guantes_protectores" name="guantes_protectores">
                    <label class="form-check-label" for="guantes_protectores">
                        Guantes protectores
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gafas_seguridad" name="gafas_seguridad">
                    <label class="form-check-label" for="gafas_seguridad">
                        Gafas de seguridad
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="mascarilla_respiratoria"
                        name="mascarilla_respiratoria">
                    <label class="form-check-label" for="mascarilla_respiratoria">
                        Mascarilla respiratoria
                    </label>
                </div>

                <br>
                <div class="mb-2">
                    <label for="obs_check_proteccion" class="form-label">Observación Chequeo Protección</label>
                    <textarea type="text" class="form-control" id="obs_check_proteccion" name="obs_check_proteccion"
                        rows="3" required style="height: 200px;"></textarea>
                </div>

                <br>
                <h2>Chequeos de Herramientas </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="herramientas_adecuadas"
                        name="herramientas_adecuadas">
                    <label class="form-check-label" for="herramientas_adecuadas">
                        Herramientas adecuadas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inspeccion_materiales"
                        name="inspeccion_materiales">
                    <label class="form-check-label" for="inspeccion_materiales">
                        Inspección materiales
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cableado_herramientas"
                        name="cableado_herramientas">
                    <label class="form-check-label" for="cableado_herramientas">
                        Cableado de herramientas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="proteccion_herramientas"
                        name="proteccion_herramientas">
                    <label class="form-check-label" for="proteccion_herramientas">
                        Protección de herramientas
                    </label>
                </div>

                <br>
                <div class="mb-2">
                    <label for="obs_check_herramientas" class="form-label">Observación Chequeo Herramientas</label>
                    <textarea type="text" class="form-control" id="obs_check_herramientas" name="obs_check_herramientas"
                        rows="3" required style="height: 200px;"></textarea>
                </div>
                <br>
                <h2>Chequeos de Maquinarias </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="luces_maquinarias" name="luces_maquinarias">
                    <label class="form-check-label" for="luces_maquinarias">
                        Luces de maquinarias
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estanque_combustible"
                        name="estanque_combustible">
                    <label class="form-check-label" for="estanque_combustible">
                        Estanque de combustible
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="motor_maquinaria" name="motor_maquinaria">
                    <label class="form-check-label" for="motor_maquinaria">
                        Motor de maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="frenos_maquinaria" name="frenos_maquinaria">
                    <label class="form-check-label" for="frenos_maquinaria">
                        Frenos de maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="boton_emergencia_maq"
                        name="boton_emergencia_maq">
                    <label class="form-check-label" for="boton_emergencia_maq">
                        Boton de emergencia maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="esp_tecnicas_maq" name="esp_tecnicas_maq">
                    <label class="form-check-label" for="esp_tecnicas_maq">
                        Especies tecnicas maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="insepeccion_maquinaria"
                        name="insepeccion_maquinaria">
                    <label class="form-check-label" for="insepeccion_maquinaria">
                        Inspección maquinaria
                    </label>
                </div>

                <br>
                <div class="mb-2">
                    <label for="obs_check_maquinaria" class="form-label">Observación Chequeo Maquinaria</label>
                    <textarea type="text" class="form-control" id="obs_check_maquinaria" name="obs_check_maquinaria"
                        rows="3" required style="height: 200px;"></textarea>
                </div>
                <br>

            </div><!-- / COL 2 -->

        </div><!-- ROW -->

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_ckl" name="id_personal_ckl" value="<?php echo $datosusuario['id_personal']?>">
        <input type="hidden" id="id_cliente_ckl" name="id_cliente_ckl" value="<?php echo $datos_cliente["id_cliente"]?>">
        <input type="hidden" id="id_rubro_ckl" name="id_rubro_ckl" value="<?php echo $datos_cliente["id_rubro"]?>">


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarCheck()">Guardar Check-List</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>




<script>

(function(){

document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

})()

function onChangeRol(event){

var id_cliente= document.getElementById('rol_cliente').value;

if(id_cliente && id_cliente>0){

    fetch("api.php/asignacion-profesional/" + id_cliente, {
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

<script>
function registrarCheck() {

    var fecha_check_list = document.getElementById("fecha_check_list").value;

    /*var check_list={
      fecha_check_list
      obs_check_general
      obs_check_proteccion
      obs_check_herramientas
      obs_check_maquinaria
      id_personal_ckl
      id_cliente_ckl
      id_rubro_ckl
    }*/

    var detalle_check_list = [];
    detalle_check_list.push({
        nombre_item: 'Señaletica',
        valor_item: document.getElementById("senaleticas").checked
    })

    detalle_check_list.push({
        nombre_item: 'Estado Contratos',
        valor_item: document.getElementById("estado_contratos").checked
    })

    detalle_check_list.push({
        nombre_item: 'Estado Extintores',
        valor_item: document.getElementById("estado_extintores").checked
    })

    detalle_check_list.push({
        nombre_item: 'Instalaciones Eléctricas',
        valor_item: document.getElementById("instalaciones_electricas").checked
    })

    detalle_check_list.push({
        nombre_item: 'Instalaciones Sanitarias',
        valor_item: document.getElementById("instalaciones_sanitarias").checked
    })


    detalle_check_list.push({
        nombre_item: 'Libro Asistencia',
        valor_item: document.getElementById("libro_asistencia").checked
    })

    detalle_check_list.push({
        nombre_item: 'Alarma Incendios',
        valor_item: document.getElementById("alarma_incendios").checked
    })

    detalle_check_list.push({
        nombre_item: 'Alumbrado Emergencia',
        valor_item: document.getElementById("alumbrado_emergencia").checked
    })

    detalle_check_list.push({
        nombre_item: 'Salidas Emergencia',
        valor_item: document.getElementById("salidas_emergencia").checked
    })

    detalle_check_list.push({
        nombre_item: 'Documentación Trabajador',
        valor_item: document.getElementById("documentacion_trabajador").checked
    })

    detalle_check_list.push({
        nombre_item: 'Agua Potable',
        valor_item: document.getElementById("agua_potable").checked
    })

    detalle_check_list.push({
        nombre_item: 'Centro Mutual',
        valor_item: document.getElementById("centro_mutual").checked
    })

    var obs_check_general = document.getElementById("obs_check_general").value

    detalle_check_list.push({
        nombre_item: 'Protectores Auditivos',
        valor_item: document.getElementById("protectores_auditivos").checked
    })

    detalle_check_list.push({
        nombre_item: 'Casco Seguridad',
        valor_item: document.getElementById("casco_seguridad").checked
    })

    detalle_check_list.push({
        nombre_item: 'Zapato Seguridad',
        valor_item: document.getElementById("zapato_seguridad").checked
    })

    detalle_check_list.push({
        nombre_item: 'Guantes Protectores',
        valor_item: document.getElementById("guantes_protectores").checked
    })

    detalle_check_list.push({
        nombre_item: 'Gafas Seguridad',
        valor_item: document.getElementById("gafas_seguridad").checked
    })

    detalle_check_list.push({
        nombre_item: 'Mascarilla Protectora',
        valor_item: document.getElementById("mascarilla_respiratoria").checked
    })

    var obs_check_proteccion = document.getElementById("obs_check_proteccion").value

    detalle_check_list.push({
        nombre_item: 'Herramientas Adecuadas',
        valor_item: document.getElementById("herramientas_adecuadas").checked
    })

    detalle_check_list.push({
        nombre_item: 'Inspecciones Materiales',
        valor_item: document.getElementById("inspeccion_materiales").checked
    })

    detalle_check_list.push({
        nombre_item: 'Cableado Herramientas',
        valor_item: document.getElementById("cableado_herramientas").checked
    })

    detalle_check_list.push({
        nombre_item: 'Protección Herramientas',
        valor_item: document.getElementById("proteccion_herramientas").checked
    })

    var obs_check_herramientas = document.getElementById("obs_check_herramientas").value

    detalle_check_list.push({
        nombre_item: 'Luces Maquinarias',
        valor_item: document.getElementById("luces_maquinarias").checked
    })

    detalle_check_list.push({
        nombre_item: 'Estanque Combustible',
        valor_item: document.getElementById("estanque_combustible").checked
    })

    detalle_check_list.push({
        nombre_item: 'Motor Maquinaria',
        valor_item: document.getElementById("motor_maquinaria").checked
    })

    detalle_check_list.push({
        nombre_item: 'Frenos Maquinaria',
        valor_item: document.getElementById("frenos_maquinaria").checked
    })

    detalle_check_list.push({
        nombre_item: 'Botón Emergencia Maquinaria',
        valor_item: document.getElementById("boton_emergencia_maq").checked
    })

    detalle_check_list.push({
        nombre_item: 'Especies Técnicas Maquinaria',
        valor_item: document.getElementById("esp_tecnicas_maq").checked
    })

    detalle_check_list.push({
        nombre_item: 'Inspección Maquinaria',
        valor_item: document.getElementById("insepeccion_maquinaria").checked
    })

    var obs_check_maquinaria = document.getElementById("obs_check_maquinaria").value



    console.log(fecha_check_list.replace('T', ' '))

    if (fecha_check_list == undefined || fecha_check_list == null || fecha_check_list.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Se debe ingresar una fecha valida',
        })
        return;

    }

    var fecha = new Date(fecha_check_list);
    var ahora = new Date();
    var dias_milisegundos = fecha.getTime() - ahora.getTime();
    var dias_diferencia = dias_milisegundos / (1000 * 60 * 60 * 24)

    console.log(ahora, 'Fecha Ahora')
    console.log(fecha_check_list, 'check')
    console.log(dias_milisegundos, 'diferencia milisegundos')
    console.log(dias_diferencia, 'diferencia dias')

    if (dias_diferencia < 15) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'La fecha debe ser mayor o igual a 15 días',
        })
        return;
    }

    if (obs_check_general == undefined || obs_check_general == null || obs_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Se debe ingresar una observación general',
        })
        return;

    }

    // Cambiar los hiden rubro y cliente por un combo box
    // el hidden del personal por el cache del profesional 
    // Enviar el request a la api

    let request = {

        check_list: {
            fecha_check_list: fecha_check_list,
            obs_check_general: obs_check_general,
            obs_check_proteccion: obs_check_proteccion,
            obs_check_herramientas: obs_check_herramientas,
            obs_check_maquinaria: obs_check_maquinaria,
            id_personal_ckl: id_personal_ckl,
            id_cliente_ckl: id_cliente_ckl,
            id_rubro_ckl: id_rubro_ckl,

        },

        detalle_check_list: detalle_check_list,

    }

    console.log(request)

    /*fetch('index.php?view=check-list', {
        method: "post",
        body: formulario
    }).then((response) => {

        Swal.fire({
            title: 'Check-List Registrado Exitosamente',
            showDenyButton: false,
            showCancelButton: false,
            confirmButtonText: 'Ok',
        }).then((result) => {
            location.reload();
        })
        /*acciones a realizar*/
    //}).then((data) => {
    /*mas acciones a realizar*/
    //})

}
</script>