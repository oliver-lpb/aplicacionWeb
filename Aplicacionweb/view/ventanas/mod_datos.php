<?php require_once "heder.php" ?>

<!-- Formulario de busqueda Alumno -->


		<div class="guia">  
 
			<form action="" method="POST" id="form">
				<div class="form">
				<h2> Modificar Alumno </h2>
					<div class="grupo">
						<input type="number" name="car_mod" min="1"required><span class="barra"></span>
						<label for="">Carnet</label>
					</div>					
					<div class="piePagina">
						<div class="button">
							<button>					
						<input type="submit" value="Buscar">
						<input type='hidden' name='tipo' value='mod_alumno'> 
							</button>
						</div>				
					</div>	
					
					<div>

					</div>
				</div>  
			</form>
		</div>
	
	<!-- Formulario de busqueda Encargado -->

		<div class="guia"> 
			
	
			<form action="" method="POST" id="form">
				<div class="form">
				<h2> Modificar Encargado </h2>  
					<div class="grupo">
						<input type="number" name="id_mod" min="1" required><span class="barra"></span>
						<label for="">id</label>
					</div>					
					<div class="piePagina">
						<div class="button">
							<button>					
						<input type="submit" value="Buscar">
						<input type='hidden' name='tipo' value='mod_encargado'> 
							</button>
						</div>				
					</div>										
				</div>  
			</form>
			<div>
						
					</div>
		</div>
    
</body>
</html>