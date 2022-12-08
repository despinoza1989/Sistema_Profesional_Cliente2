<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado de Respuestas Asesorías</h3>
        <table class="table table-sm">
            <tr>
                <th>Tipo Asesoría</th>
                <th>Nombre Profesional Que Entrega Respuesta</th>
                <th>Rut</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_respuesta as $row){ ?>

            <tr>
                <td><?php echo $row["tipo_asesoria"]?></td>
                <td><?php echo $row["nombre_personal"]?> <?php echo $row["apellidos_personal"]?></td>
                <td><?php echo $row["rut_personal"]?></td>
                <td><?php echo $row["telefono_personal"]?></td>
                <td><?php echo $row["email_personal"]?></td>
                <td>
                    <a href="index.php?view=detalle-respuesta-asesoria&id_respuesta_asesoria=<?php echo $row["id_respuesta_asesoria"]?>"
                        class="btn btn-info btn-sm">Ver Respuesta</a>
                </td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>