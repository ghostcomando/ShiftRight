<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio de sesion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="css/signin.css" rel="stylesheet">
</head>

  <body>
    <div class="container">
		<form action="index.php" class="form-signin" method="POST">
			<h2 class="form-signin-heading">Inicie Sesi&oacute;n</h2>
			<div class="form-group">
				<input type="text" id="Usuario" class="form-control" placeholder="Usuario">
			</div>
			<input type="password" id="Contrasena" class="form-control" placeholder="Contrase&ntilde;a" required>
			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="remember-me"> Recu&eacute;rdame
			  </label>
			</div>
			<button class="btn btn-lg btn-danger btn-block" type="submit" name="iniciosesion">Iniciar Sesi&oacute;n</button>
		</form>
	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
