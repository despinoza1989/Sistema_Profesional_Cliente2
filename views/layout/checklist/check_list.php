<div class="card-body" style="margin: 2em 5em;">
    <h1> Lista de Check </h1>
    <br>
    <br>
    <h2> Favor seleccionar las opciones según corresponda: </h2>
    <br>
    <form id="registro_check" class="row g-3 needs-validation">
    
    <div class="container">
 
  <div class="row"><!-- ROW -->
 
<div class="col-5"><!-- COL 1 -->
 
<div class="mb-2">
                <label for="fecha_check_list" class="form-label">Fecha</label>
                <input type="datetime-local" class="form-control" id="fecha_check_list" name="fecha_check_list" required>
            </div>
</div>
<br>
<h2>Chequeos Generales </h2>
 
</div><!-- COL 1 -->
<br>
<div class="col-5"><!-- COL 2 -->
 
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
  <input class="form-check-input" type="checkbox" id="instalaciones_electricas" name="instalaciones_electricas">
  <label class="form-check-label" for="instalaciones_electricas">
    Instalaciones eléctricas
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" id="instalaciones_sanitarias" name="instalaciones_sanitarias">
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
  <input class="form-check-input" type="checkbox" id="alumbrado_emergencia" name="alumbrado_emergencia">
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
  <input class="form-check-input" type="checkbox" id="documentacion_trabajador" name="documentacion_trabajador">
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
    <label for="obs_check_general" class="form-label" >Observación Chequeo General</label>
    <textarea type="text" class="form-control" id="obs_check_general" name="obs_check_general" rows="3" required style="height: 200px;"></textarea>
</div>
<br>
<h2>Chequeos de Protección </h2>
<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="protectores_auditivos" name="protectores_auditivos">
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
  <input class="form-check-input" type="checkbox" id="mascarilla_respiratoria" name="mascarilla_respiratoria">
  <label class="form-check-label" for="mascarilla_respiratoria">
    Mascarilla respiratoria
  </label>
</div>

<br>
<div class="mb-2">
    <label for="obs_check_proteccion" class="form-label" >Observación Chequeo Protección</label>
    <textarea type="text" class="form-control" id="obs_check_proteccion" name="obs_check_proteccion" rows="3" required style="height: 200px;"></textarea>
</div>

<br>
<h2>Chequeos de Herramientas </h2>
<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="herramientas_adecuadas" name="herramientas_adecuadas">
  <label class="form-check-label" for="herramientas_adecuadas">
    Herramientas adecuadas
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" id="inspeccion_materiales" name="inspeccion_materiales">
  <label class="form-check-label" for="inspeccion_materiales">
    Inspección materiales
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" id="cableado_herramientas" name="cableado_herramientas">
  <label class="form-check-label" for="cableado_herramientas">
    Cableado de herramientas
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" id="proteccion_herramientas" name="proteccion_herramientas">
  <label class="form-check-label" for="proteccion_herramientas">
    Protección de herramientas
  </label>
</div>

<br>
<div class="mb-2">
    <label for="obs_check_herramientas" class="form-label" >Observación Chequeo Herramientas</label>
    <textarea type="text" class="form-control" id="obs_check_herramientas" name="obs_check_herramientas" rows="3" required style="height: 200px;"></textarea>
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
  <input class="form-check-input" type="checkbox" id="estanque_combustible" name="estanque_combustible">
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
  <input class="form-check-input" type="checkbox" id="boton_emergencia_maq" name="boton_emergencia_maq">
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
  <input class="form-check-input" type="checkbox" id="insepeccion_maquinaria" name="insepeccion_maquinaria">
  <label class="form-check-label" for="insepeccion_maquinaria">
    Inspección maquinaria
  </label>
</div>

<br>
<div class="mb-2">
    <label for="obs_check_maquinaria" class="form-label" >Observación Chequeo Maquinaria</label>
    <textarea type="text" class="form-control" id="obs_check_maquinaria" name="obs_check_maquinaria" rows="3" required style="height: 200px;"></textarea>
</div>
<br>
 
</div><!-- / COL 2 -->
 
  </div><!-- ROW -->

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_ckl" name="id_personal_ckl" value="1">
        <input type="hidden" id="id_cliente_ckl" name="id_cliente_ckl" value="1">
        <input type="hidden" id="id_rubro_ckl" name="id_rubro_ckl" value="1">
        
 
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarCheck()">Guardar Check-List</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>


<script>
    function registrarCheck(){

        var fecha_check_list=document.getElementById("fecha_check_list").value;

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

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Señaletica',
          valor_item: document.getElementById("senaleticas").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Estado Contratos',
          valor_item: document.getElementById("estado_contratos").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Estado Extintores',
          valor_item: document.getElementById("estado_extintores").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Instalaciones Eléctricas',
          valor_item: document.getElementById("instalaciones_electricas").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Instalaciones Sanitarias',
          valor_item: document.getElementById("instalaciones_sanitarias").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Libro Asistencia',
          valor_item: document.getElementById("libro_asistencia").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Alarma Incendios',
          valor_item: document.getElementById("alarma_incendios").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Alumbrado Emergencia',
          valor_item: document.getElementById("alumbrado_emergencia").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Salidas Emergencia',
          valor_item: document.getElementById("salidas_emergencia").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Documentación Trabajador',
          valor_item: document.getElementById("documentacion_trabajador").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Agua Potable',
          valor_item: document.getElementById("agua_potable").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Centro Mutual',
          valor_item: document.getElementById("centro_mutual").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Observación General',
          valor_item: document.getElementById("obs_check_general").value
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Protectores Auditivos',
          valor_item: document.getElementById("protectores_auditivos").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Casco Seguridad',
          valor_item: document.getElementById("casco_seguridad").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Zapato Seguridad',
          valor_item: document.getElementById("zapato_seguridad").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Guantes Protectores',
          valor_item: document.getElementById("guantes_protectores").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Gafas Seguridad',
          valor_item: document.getElementById("gafas_seguridad").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Mascarilla Protectora',
          valor_item: document.getElementById("mascarilla_respiratoria").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Observación Protección',
          valor_item: document.getElementById("obs_check_proteccion").value
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Herramientas Adecuadas',
          valor_item: document.getElementById("herramientas_adecuadas").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Inspecciones Materiales',
          valor_item: document.getElementById("inspeccion_materiales").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Cableado Herramientas',
          valor_item: document.getElementById("cableado_herramientas").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Protección Herramientas',
          valor_item: document.getElementById("proteccion_herramientas").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Observación Herramientas',
          valor_item: document.getElementById("obs_check_herramientas").value
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Luces Maquinarias',
          valor_item: document.getElementById("luces_maquinarias").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Estanque Combustible',
          valor_item: document.getElementById("estanque_combustible").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Motor Maquinaria',
          valor_item: document.getElementById("motor_maquinaria").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Frenos Maquinaria',
          valor_item: document.getElementById("frenos_maquinaria").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Botón Emergencia Maquinaria',
          valor_item: document.getElementById("boton_emergencia_maq").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Especies Técnicas Maquinaria',
          valor_item: document.getElementById("esp_tecnicas_maq").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Inspección Maquinaria',
          valor_item: document.getElementById("insepeccion_maquinaria").checked
        })

        var detalle_check_list=[];
        detalle_check_list.push({
          nombre_item:'Observación Maquinaria',
          valor_item: document.getElementById("obs_check_maquinaria").value
        })

        
        console.log(fecha_check_list.replace('T',' '))
        
        if(fecha_check_list==undefined || fecha_check_list==null || fecha_check_list.trim()=="" ){
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
        var dias_diferencia = dias_milisegundos/(1000*60*60*24)

        console.log(ahora, 'Fecha Ahora')
        console.log(fecha_check_list, 'check')
        console.log(dias_milisegundos, 'diferencia milisegundos')
        console.log(dias_diferencia, 'diferencia dias')

        if(dias_diferencia<15){
          Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'La fecha debe ser mayor o igual a 15 días',                
                })            
            return;
        }

        if(obs_check_general==undefined || obs_check_general==null || obs_check_general.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe ingresar una observación general',                
                })            
            return;

        }
        
        let formulario = new FormData(document.getElementById("registro_check"))
        fetch('index.php?view=check-list', {
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
        }).then((data) => {
            /*mas acciones a realizar*/
        })
        
    }

    

</script>

