
<?php require_once "heder.php" ?>

<!-- caja de registro 2 ninio-->
    <div id="ninio" class="caja">
			<form action="inscribir.php" method="POST" id="form">
				<div class="form">
					<div class="titulo"><h1>Datos del Niño</h1></div>
					
                        <div class="grupo">
						<input type="number" name="car_alum" id="name" min="1" required><span class="barra"></span>
						<label for="">Carné</label>
						</div>	

						<div class="grupo">
						<input type="text" name="nom_alum" required><span class="barra"></span>
						<label for="">Nombre</label>
						</div>

						<div class="grupo">
						<input type="text" name="ape_alum" required><span class="barra"></span>
						<label for="">Apellido</label>
						</div>

						<div class="grupo">
						<input type="date" name="fec_alum" required ><span class="barra"></span>
						<label class= "fecha"for="">Fecha de nacimienoto</label>
						</div>

						<div class="grupo">
						<input type="number" name="edad_alum" min="1" required><span class="barra"></span>
						<label for="">Edad</label>
						</div>
					
						<div class="grupo">
						<label for="" >Grado</label><span class=""></span>
					    <select name="grado_alum" required> 
							<option>1A</option > 
							<option>1B</option>
							<option>1C</option>
                            <option>2A</option > 
							<option>2B</option>
							<option>2C</option>  
                            <option>3A</option > 
							<option>3B</option>
							<option>3C</option>
                            <option>4A</option > 
							<option>5B</option>
							<option>5C</option>
                            <option>6A</option > 
							<option>6B</option>
							<option>6C</option> </select>
						</div>

				
						<div class="grupo">
						<label for="" >Sexo</label><span class=""></span>
					    <select name="sexo_alum" required> 
							<option>Masculino</option > 
							<option>Femenino</option></select> 
						</div>

                    	<div class="grupo">
						<input type="number" name="id_en" min="1" required><span class="barra"></span>
						<label for="">Id encargado</label>
						</div>
						</div>

                	
				<div>
				<div class="piePaginaGuardar">	
						<button>
							<input type="submit" value="Guardar" name="registro_alumno">  
							<input type='hidden' name='tipo' value='registrar_alumno'> 
						</button>				
						
					</div>
		    </form>
	</div>
    
</body>
</html>