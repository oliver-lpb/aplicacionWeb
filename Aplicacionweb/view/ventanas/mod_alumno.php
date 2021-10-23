<?php require_once "heder.php" ?>

<!-- Tabla de busqueda de alumno -->
                <?php foreach($mod_ninio["alumno"] as $dato)?>     
	


<!-- Formulario de Modificacion de ninio-->

		<div id="ninio" class="caja">
			<form action="" method="POST" id="form">
				<div class="form">
					<div class="titulo"><h1>Datos del Niño</h1></div>
					
					<div class="grupo">
						<input type="number" name="car_alum_m" value="<?php echo $dato["carnet"] ?>" nmin="1" required><span class="barra"></span>
						<label for="">Carné</label>
						</div>	

						<div class="grupo">
						<input type="text" name="nom_alum_m" value="<?php echo $dato["nom_alumno"] ?>" required><span class="barra"></span>
						<label for="">Nombre</label>
						</div>

						<div class="grupo">
						<input type="text" name="ape_alum_m" value="<?php echo $dato["ape_alumno"] ?>" required><span class="barra"></span>
						<label for="">Apellido</label>
						</div>

						<div class="grupo">
						<input type="date" name="fec_alum_m" value="<?php echo $dato["fecha_nac"] ?>" required ><span class="barra"></span>
						<label class= "fecha"for="">Fecha de nacimienoto</label>
						</div>

						<div class="grupo">
						<input type="number" name="edad_alum_m" value="<?php echo $dato["edad"] ?>" min="1" required><span class="barra"></span>
						<label for="">Edad</label>
						</div>
					
						<div class="grupo">
						
						<input type="text" name="grado_alum_m" value="<?php echo $dato["id_grado"] ?>" required><span class="barra"></span>
						<label for="" >Grado</label>	
						</div>
				
						<div class="grupo">
						<label for="" >Sexo</label><span class=""></span>
					    <select name="sexo_alum_m" id="name" value="<?php echo $dato["sexo"] ?>" required> 
							<option>Masculino</option > 
							<option>Femenino</option></select> 
						</div>

                    	<div class="grupo">
						<input autocomplete="off" type="number" name="id_en_m" id="name" value="<?php echo $dato["id_encargado"] ?>" min="1" required><span class="barra"></span>
						<label for="">Id encargado</label>
						</div>
						</div>

                	
				<div>
				<div class="piePaginaGuardar">	
					<button>
						<input type="submit" value="Actualizar" name="mod_alumno">  
						<input type='hidden' name='tipo' value='modificar_alumno'> 
					</button>				
						
					</div>
		    </form>
		</div>
	</div>
    </body>
    </html>