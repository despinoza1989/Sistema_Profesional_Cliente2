<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado Check-List</h3>
        <table class="table table-sm">
            <tr>
                <th>Rut Profesional</th>
                <th>Nombre Profesional</th>
                <th>Apellidos Profesional</th>
                <th>Teléfono Profesional</th>
                <th>Email Profesional</th>
                <th>Fecha/Hora Check-List</th>
                <th>Opciones</th>
            </tr>

            <?php foreach ($dato_asignacion as $row){ ?>

            <tr>
                <td><?php echo $row["rut_personal"]?></td>
                <td><?php echo $row["nombre_personal"]?></td>
                <td><?php echo $row["apellidos_personal"]?></td>
                <td><?php echo $row["telefono_personal"]?></td>
                <td><?php echo $row["email_personal"]?></td>
                <td><?php echo $row["fecha_check_list"]?></td>
                <td>
                    <a href="index.php?view=detalle-check-list&id_check_list=<?php echo $row["id_check_list"]?>"
                        class="btn btn-info btn-sm">Ver Detalle</a>
                </td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>