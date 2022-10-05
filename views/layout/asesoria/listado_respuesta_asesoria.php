<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Respuestas Asesorias</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Tipo Asesoría</th>
                <th>Fecha</th>
                <th>Profesional a Cargo</th>
            </tr>

            <?php foreach ($datos_asesoria as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["tipo_asesoria"]?></td>
                    <td><?php echo $row["nombre_personal"]?></td>
                    <td><?php echo $row["apellidos_personal"]?></td>                   
                    <td>
                     
                         

                    </td>
                    <td>
                        <a href="index.php?view=detalle-respuesta-asesoria" class="btn btn-info btn-sm">Ver Respuesta</a>                        
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
