
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Capacitaciones</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre Capacitacion</th>
                <th>Fecha Capacitacion</th>
                <th>Nombre Profesional</th>
                <th>Rut Profesional</th>
                <th>Razon Social</th>
                <th>Rol Cliente</th>

            </tr>

            <?php foreach ($datos_capacitacion as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["nombre_capacitacion"]?></td>
                    <td><?php echo $row["fecha_capacitacion"]?></td>
                    <td><?php echo $row["nombre_personal"]?></td>
                    <td><?php echo $row["rut_personal"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                   
                    <td>
                     
                         

                    </td>
                    <td>
                    <a href="index.php?view=crear-capacitacion" class="btn btn-info btn-sm">Ver Solicitud</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
