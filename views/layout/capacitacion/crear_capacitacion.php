<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Capacitación </h1>
    <br>
    <br>
    <h2> Profesional Solicitante </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="nombre_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_capacitacion" name="nombre_capacitacion" required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Rol</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir un Rol Valido
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
            <input type="text" class="form-control" id="razon_social" name="razon_social" required>
            <div class="invalid-feedback">
                Favor de introducir una razón social valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="" required>
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
        <div class="col-md-6">
            <label for="link_capacitacion" class="form-label">Adjuntar Documentos</label>
            <input class="form-control" type="file" id="link_capacitacion" name="link_capacitacion" multiple>
        </div>
            <input type="hidden" id="accion" name="accion" value="registrar">
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarCapacitacion()">Crear Capacitacion</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>
    function registrarCapacitacion(){
        var nombre_capacitacion=document.getElementById("nombre_capacitacion").value;
        var link_capacitacion=document.getElementById("link_capacitacion").value;
        console.log(rut_personal, telefono_personal)

        



        if(nombre_capacitacion==undefined || nombre_capacitacion==null || nombre_capacitacion.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre',                
                })            
            return;

        }
       
    }

</script>


