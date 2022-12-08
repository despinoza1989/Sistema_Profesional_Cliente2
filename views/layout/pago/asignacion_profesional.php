<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Asignación de Profesional</h3>
        <table class="table table-sm">
            <tr>
                <th>Rut Profesional</th>
                <th>Nombre Profesional</th>
                <th>Apellido Profesional</th>
                <th>Teléfono Profesional</th>
                <th>Email Profesional</th>
            </tr>

            <?php foreach ($datos_asignación as $row){ ?>

            <tr>
                <td><?php echo $row["rut_personal"]?></td>
                <td><?php echo $row["nombre_personal"]?></td>
                <td><?php echo $row["apellidos_personal"]?></td>
                <td><?php echo $row["telefono_personal"]?></td>
                <td><?php echo $row["email_personal"]?></td>

            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>