 <!-- BARRA DE MENUS LATERAL-->
 <div class="card-body" style="margin: 2em 5em;">
    <h1> Detalle Respuesta Asesoria</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form id="visualizar_respuesta_asesoria" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal" value="<?php echo $datosusuario['rut_personal']?>" disabled required>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" value="<?php echo $datosusuario['nombre_personal']?>" disabled required>
            <div class="valid-feedback">
                Favor de introducir un nombre Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
            <div class="valid-feedback">
                Favor de introducir un apellido Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un telefono valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">Correo</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal" change="onChangeRol" value="<?php echo $datosusuario['email_personal']?>" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un correo Valido
            </div>
        </div>
        <br>
        <br>
       
        <div class="col-md-12">
            <label for="respuesta_asesoria" class="form-label">Detalle de Respuesta Profesional</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="respuesta_asesoria" name="respuesta_asesoria" placeholder="Detalle de la asesoría" value="<?php echo $datos_respuesta_asesoria['respuesta_asesoria']?>" disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

   
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_vt" name="id_personal_vt" value="1">
        <input type="hidden" id="id_cliente_vt" name="id_cliente_vt" value="1"> 

    </form>
    <br>
    <br>

</div>

