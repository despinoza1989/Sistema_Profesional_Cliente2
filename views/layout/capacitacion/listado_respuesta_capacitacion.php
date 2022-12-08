<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado de Capacitaciones</h3>
        <table class="table table-sm">
            <tr>
                <th>Nombre Capacitacion</th>
                <th>Fecha de Realización de Capacitación</th>
                <th>Nombre Profesional</th>
                <th>Apellido Profesional</th>
                <th>Email Profesional</th>
                <th>Teléfono Profesional</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_capacitacion as $row){ ?>

            <tr>
                <td><?php echo $row["nombre_capacitacion"]?></td>
                <td><?php echo $row["fecha_capacitacion"]?></td>
                <td><?php echo $row["nombre_personal"]?></td>
                <td><?php echo $row["apellidos_personal"]?></td>
                <td><?php echo $row["email_personal"]?></td>
                <td><?php echo $row["telefono_personal"]?></td>


                <td>
                    <a href="index.php?view=detalle-capacitaciones&id_crear_capacitacion=<?php echo $row["id_crear_capacitacion"]?>"
                        class="btn btn-success btn-sm">Ver Detalle</a>
                </td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>