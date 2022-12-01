
<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos del Profesional </h2>
    <br>
    <form id="modificar_cliente" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal" value="" maxlength="10" disabled required>
        </div>

        <div class="col-md-6">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="apellidos_personal" class="form-label">Apllidos</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" value="" disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_personal" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_personal" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_personal" name="email_personal"
                    aria-describedby="inputGroupPrepend" placeholder="Ingrese un Correo de Contacto" disabled required>
            </div>
        </div>          
        <br><br><br><br><br>


    <input type="hidden" id="id_personal" name="id_personal" value="<?php echo $datos_cliente['id_personal'] ?>">

    </form>
  
</div>


<script>

    (function(){

    document.getElementById('id_personal').addEventListener('change', onChangeRut);

    onChangeRut({})

    })()

    function onChangeRut(event){

        var id_personal= document.getElementById('id_personal').value;
        
        console.dir(id_personal)

        if(id_personal && id_personal>0){

            fetch("api.php/personal/" + id_personal, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                document.getElementById('id_personal').value=datos.id_personal;
                document.getElementById("rut_personal").value=datos.rut_personal;
                document.getElementById('telefono_personal').value=datos.telefono_personal;
                document.getElementById('nombre_personal').value=datos.nombre_personal;
                document.getElementById('apellidos_personal').value=datos.apellidos_personal;
                document.getElementById('email_personal').value=datos.email_personal;


            })

        }
    }


</script>