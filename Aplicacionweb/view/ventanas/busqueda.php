<?php require_once "heder.php" ?>

<!-- Formulario de busqueda -->

		<div class="guia">   
			<form action="" method="POST" id="form">
				<div class="form">
					<div class="grupo">
						<input autocomplete="off" type="number" name="car_buscar" id="name" required><span class="barra"></span>
						<label for="">Carnet</label>
					</div>					
					<div class="piePagina">
						<div class="button">
							<button>					
						<input type="submit" value="Buscar">
						<input type='hidden' name='tipo' value='busqueda'> 
							</button>
						</div>				
					</div>										
				</div>  
			</form>
		</div>
	

<!-- Listado General de Alumnos -->
<h3>Listado general </h3>
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
                                
                    foreach($data["alumnos"] as $dato) {
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