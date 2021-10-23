<?php require_once "heder.php" ?>

<!-- Resultado de busqueda -->

<!-- <div class="listageneral" id="listaGeneral">
		<div class="salir">
		<a href="javascript:void(0);" onclick="salirListas();">x</a>  -
		</div> -->
		<h3>Resultado de la Busqueda </h3>
       <div class="tablaBusqueda">
       <table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Nombre </th>
                    <th>Apellido </th>
                    <th>Fecha_Nacimiento </th>
                    <th>Edad</th>
                    <th>Sexo </th>
					<th>Grado </th>
					<th> ID Encargado </th>
					
                </tr>
            </thead>    

            <tbody>
      
                <?php 
                                
                    foreach($buscar["alumno"] as $dato) {
                    echo "<tr>";
                    echo "<td>".$dato["carnet"]."</td>";
                    echo "<td>".$dato["nom_alumno"]."</td>";
                    echo "<td>".$dato["ape_alumno"]."</td>"; 
                    echo "<td>".$dato["fecha_nac"]."</td>";
                    echo "<td>".$dato["edad"]."</td>";
                    echo "<td>".$dato["sexo"]."</td>";
                    echo "<td>".$dato["id_grado"]."</td>";
                    echo "<td>".$dato["id_encargado"]."</td>";;  
                    echo "</tr>";
                    } 
                ?>
            </tbody> 
            
        </table> 
       </div>

        
	</div>

</body>
</html>