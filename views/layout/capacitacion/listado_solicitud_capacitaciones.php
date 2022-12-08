<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado de Solicitudes de Capacitaciones</h3>
        <table class="table table-sm">
            <tr>
                <th>Nombre Solicitud Capacitación</th>
                <th>Fecha Solicitud Capacitación</th>
                <th>Rol Cliente</th>
                <th>Razón Social</th>
                <th>Teléfono Cliente</th>
                <th>Dirección Cliente</th>
                <th>Tipo Personal a Capacitar</th>
            </tr>

            <?php foreach ($datos_solicitud as $row){ ?>

            <tr>
                <td><?php echo $row["nombre_solicitud_capacitacion"]?></td>
                <td><?php echo $row["fecha_solicitud_capacitacion"]?></td>
                <td><?php echo $row["rol_cliente"]?></td>
                <td><?php echo $row["razon_social_cliente"]?></td>
                <td><?php echo $row["telefono_cliente"]?></td>
                <td><?php echo $row["direccion_cliente"]?></td>
                <td><?php echo $row["tipo_personal_capacitacion"]?></td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>