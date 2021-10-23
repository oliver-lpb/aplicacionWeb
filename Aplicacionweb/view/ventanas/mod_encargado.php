<?php require_once "heder.php" ?>

<?php 
                                
    foreach($mod_encargado["encargado"] as $dato) 
?>


<!--Formulario de modificacion datos de encargado-->

<div id="encargado" class="caja">
			<form action="modificar.php" method="POST" id="form">
				<div class="form">

					<div class="titulo"> <h1>Datos del Encargado</h1> </div>

						<div class="grupo">
						<input type="number" name="id_enc_m" value="<?php echo $dato["Id_encargado"] ?>" min="1" required><span class="barra"></span>
						<label for="">Id</label>
						</div>

						<div class="grupo">
						<input type="text" name="nombre_enc_m" value="<?php echo $dato["nom_encargado"] ?>" required><span class="barra"></span>
						<label for="">Nombre</label>
						</div>

						<div class="grupo">
						<input type="text" name="ape_enc_m" value="<?php echo $dato["ape_encargado"] ?>" required><span class="barra"></span>
						<label for="">Apellido</label>
						</div>

						<div class="grupo">
						<input type="text" name="dpi_m" value="<?php echo $dato["dpi"] ?>"  required minlength="13" maxlength="13" required><span class="barra"></span>
						<label for="">DPI</label>
						</div>

						<div class="grupo">
						<input type="email" name="correo_m" value="<?php echo $dato["correo"] ?>" required><span class="barra"></span>
						<label for="">Email</label>
						</div>

						<div class="grupo">
						<input type="text" name="direccion_m" value="<?php echo $dato["direccion_casa"] ?>" required><span class="barra"></span>
						<label for="">Dirección casa</label>
						</div>

						<div class="grupo">
						<input type="text" name="tel_m" value="<?php echo $dato["telefono"] ?>" minlength="8" maxlength="8" required><span class="barra"></span>
						<label for="">Telefono casa</label>
						</div>

						<div class="grupo">
						<input type="text" name="cel_m" value="<?php echo $dato["celular"] ?>" minlength="8" maxlength="8"required><span class="barra"></span>
						<label for="">Celular</label>
						</div>

						<div class="grupo">
						<label for="" >Sexo</label><span class=""></span>
							<select name="sexo_enc_m" value="<?php echo $dato["sexo_enc"] ?>" required> 
							<option>Masculino</option > 
							<option>Femenino</option></select> 
						</div>
					
				</div>
				<div class="piePaginaGuardar">		
					<button>
						<input type="submit" value="Actualizar" name="mod_enc">  
						<input type='hidden' name='tipo' value='modificar_encargado'> 
					</button>			
					
					</div>
			</form>
		</div>
