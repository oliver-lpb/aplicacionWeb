
<?php require_once 'heder.php'; ?>


<!--datos de encargado-->

		<div id="encargado" class="caja">
			<form action="inscribir.php" method="POST" id="form">
				<div class="form">

					<div class="titulo"> <h1>Datos del Encargado</h1> </div>

						<div class="grupo">
						<input type="number" name="id_enc" min="1" required><span class="barra"></span>
						<label for="">Id</label>
						</div>

						<div class="grupo">
						<input type="text" name="nombre_enc" required><span class="barra"></span>
						<label for="">Nombre</label>
						</div>

						<div class="grupo">
						<input type="text" name="ape_enc" required><span class="barra"></span>
						<label for="">Apellido</label>
						</div>

						<div class="grupo">
						<input type="text" name="dpi" required minlength="13" maxlength="13"><span class="barra"></span>
						<label for="">DPI</label>
						</div>

						<div class="grupo">
						<input type="email" name="correo" required><span class="barra"></span>
						<label for="">Email</label>
						</div>

						<div class="grupo">
						<input type="text" name="direccion" required><span class="barra"></span>
						<label for="">Dirección casa</label>
						</div>

						<div class="grupo">
						<input type="text" name="tel" minlength="8" maxlength="8" required><span class="barra"></span>
						<label for="">Telefono casa</label>
						</div>

						<div class="grupo">
						<input type="text" name="cel" minlength="8" maxlength="8" required><span class="barra"></span>
						<label for="">Celular</label>
						</div>

						<div class="grupo">
						<label for="" >Sexo</label><span class=""></span>
							<select name="sexo_enc" required> 
							<option>Masculino</option > 
							<option>Femenino</option></select> 
						</div>
					

				</div>
				
				<div class="piePaginaGuardar">	
						<button>
						<input type="submit" value="Siguiente" name="registro_enc">  
						<input type='hidden' name='tipo' value='registrar_encargado'> 
						</button>				
						
					</div>
			</form>
		</div>
</body>

</html>