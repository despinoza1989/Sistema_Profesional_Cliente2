
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Respuestas Asesorias</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Tipo Asesoría</th>
                <th>Respuesta De Solicitud Asesoría</th>
                <th>Nombre Profesional que entrega respuesta</th>
                <th>Rut</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_respuesta as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["tipo_asesoria"]?></td>
                    <td><?php echo $row["respuesta_asesoria"]?></td>
                    <td><?php echo $row["nombre_personal"]?> <?php echo $row["apellidos_personal"]?></td>                 
                    <td><?php echo $row["rut_personal"]?></td>
                    <td>
                        <a href="index.php?view=detalle-respuesta-asesoria&id_respuesta_asesoria=<?php echo $row["id_respuesta_asesoria"]?>" class="btn btn-info btn-sm">Ver Respuesta</a>                        
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
