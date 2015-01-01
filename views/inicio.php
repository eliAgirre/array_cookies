<?php

// Se inicia sesión o reanuda la sesión
session_start();

if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario']!=''){

	// Se importan las funciones
	include_once("funciones/logueo.php");

	$datosUsuario=obtenerDatosUsuario($_SESSION['id_usuario']);

	$email;
	$usuario;
	$password;

	// Recorremos los datos para saber si el email existe
	foreach($datosUsuario as $campos => $datos){

		if($campos=='email'){

			$email=$datos;

		}

		if($campos=='usuario'){

			$usuario=$datos;

		}

		if($campos=='password'){

			$password=$datos;

		}

	} // Cierre del bucle foreach

	// Se establece el array de cookies (guardar la información del usuario)
	setcookie("usuario[email]", $email, time()+3600);
	setcookie("usuario[nombre]", $usuario, time()+3600);
	setcookie("usuario[password]", $password, time()+3600);
	// Se expira en 1min.*/
	
}
?>
<html>

	<head>
		<meta charset="utf8" />
		<title> filmdate </title>
	</head>

	<body>

		<h2> filmdate </h2>

		<!-- Menu -->
		<a href="/index.php"> Inicio </a>

		<?php

			// Botones de regitro y login
			if(!(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario']!='')){

				// Se incluye el archivo noLogInicio que contiene los dos botones
				include("noLogInicio.html");

			}
			else{

				// array cookie
				if (isset($_COOKIE['usuario'])) {

				    foreach ($_COOKIE['usuario'] as $name => $value) {

				        $name=htmlspecialchars($name);

				        if($name=="nombre"){

				        	$value=htmlspecialchars($value);

				        	echo "<a href='views/profile.php'>$value</a>";


				        }

				    }

				}

				//Boton salir
				include("logInicio.html");

			}

		?>

	</body>

</html>