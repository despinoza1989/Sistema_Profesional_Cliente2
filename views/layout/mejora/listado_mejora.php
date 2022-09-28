
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Mejoras</h3>
        <table class="">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>ID Mejora</th>
                <th>Observación General</th>
                <th>Observación proteccion</th>
                <th>Observación herramientas</th>
                <th>Observación maquinaria</th>
                <th>Opciones</th>
            </tr>
            
            <?php foreach ($datos_mejora as $row){ ?>
           
           <tr>
               <td><?php echo $row["id_mejoras"]?></td>
               <td><?php echo $row["obs_check_general"]?></td>
               <td><?php echo $row["obs_check_proteccion"]?></td>
               <td><?php echo $row["obs_check_herramientas"]?></td>
               <td><?php echo $row["obs_check_maquinaria"]?></td>
               <td>
                   <a href="#" class="btn btn-info btn-sm">Modificar</a>
               </td>         
           </tr>

            <?php }?>
        
        </table>
</div>
<br><br><br><br><br>
