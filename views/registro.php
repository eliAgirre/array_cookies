<html>

	<head>
		<meta charset="utf8" />
		<title> Registro </title>
	</head>

	<body>

		<h2> Registro </h2>

		<!-- Menu -->
		<a href="/index.php"> Inicio </a><br/ ><br/ >

		<!-- Formulario de registro -->
		<form method="post" action="../model/registro.php">

			<label>Email</label>
			<input type="email" name="email"><br/ ><br/ >

			<label>Nombre de usuario</label>
			<input type="text" name="username"><br/ ><br/ >

			<label>Contraseña</label>
			<input type="password" name="password"><br/ ><br/ >

			<label>Repite la contraseña</label>
			<input type="password" name="password2"><br/ ><br/ >

			<button type="submit" name="registro">Registrarte</button>

		</form>

	</body>

</html>