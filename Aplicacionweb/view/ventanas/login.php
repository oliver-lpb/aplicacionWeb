

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDELAC</title>

	<link rel="stylesheet"  href="view/css/ingresar.css">
	 
	<!-- estilo de formato-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="../imagen/icon.png" />
	



</head>
<body>
<div class="cargas">

<form class="cargaForm" action="principal.php" method="POST" id="form">
				<div class="formLogin">

					<div class=""><h1>Iniciar Sesion</h1></div>

						<div class="grupo">
						<input autocomplete="off" type="text" name="usuario" id="name" required><span class="barra"></span>
						<label for="">Usuario</label>
						</div>

						<div class="grupo">
						<input autocomplete="off" type="password" name="clave" id="name" required><span class="barra"></span>
						<label for="">Contraseña</label>
						</div>

					
				</div>
				<div class="piePaginaGuardar">	
						<button>
							<input type="submit" value="Aceptar" name="registro">  
							<input type='hidden' name='tipo' value='login'> 
						</button>				
						
					</div>
			</form>
</div>

        
</body>
</html>