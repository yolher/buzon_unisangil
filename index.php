<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>default</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery.transit.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<section id="contenedor">
	<section id="entrada">
		<form action="" name="ingeso" method="POST">
			<select name="carrera" >
				<option value="">Escoje tu carrera</option>
				<option value="Administración de Empresas">Administración de Empresas</option>
				<option value="Contaduría Pública">Contaduría Pública</option>
				<option value="Derecho">Derecho</option>
				<option value="Enfermería">Enfermería</option>
				<option value="Ingeniería Agrícola">Ingeniería Agrícola</option>
				<option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
				<option value="Ingeniería Electrónica">Ingeniería Electrónica</option>
				<option value="Ingeniería de Sistemas">Ingeniería de Sistemas</option>
				<option value="Ingeniería en Mantenimiento">Ingeniería en Mantenimiento</option>
				<option value="Ingeniería Financiera">Ingeniería Financiera</option>
				<option value="Psicología">Psicología</option>
				<option value="Tecnología en Análisis y Programación de Sistemas de Información">Tecnología en Análisis y Programación de Sistemas de Información</option>
				<option value="Tecnologia en Gestión Turistica y Hotelera">Tecnologia en Gestión Turistica y Hotelera</option>
				<option value="Tecnología en Sistemas">Tecnología en Sistemas</option>
				<option value="Técnica Profesional en Medios Audiovisuales">Técnica Profesional en Medios Audiovisuales</option>
			</select><br><br>
			Ingresa tu comentario
			<textarea name="comentario" placeholder="comentario">
			</textarea>
			<input type="submit" value="enviar">
		</form>
	</section>
	
	<section id="salida">
	<?php
	require_once('ingresar.php');
	?>
	</section>
	</section>
</body>
</html>