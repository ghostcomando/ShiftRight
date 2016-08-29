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
  	@include('alerts.ErrorsRequest')
  	@include('alerts.AlertsRequest')
    <div class="container">
		{!!Form::open(['route'=>'log.store', 'method'=>'POST', 'class'=>'form-signin'])!!}
			<h2 class="form-signin-heading">Inicie Sesi&oacute;n</h2>
			<div class="form-group">
				{!!Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
			</div>
			<div class="form-group">
				{!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa tu contrase&ntilde;a', 'required'])!!}
			</div>
			{!!Form::select('ventanilla', $Ventanillas, null, ['class'=> 'btn btn-default form-control'])!!}
			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="remember-me"> Recu&eacute;rdame
			  </label>
			</div>
			<button class="btn btn-lg btn-info btn-block" type="submit" name="iniciosesion">Iniciar Sesi&oacute;n</button>
		{!!Form::close()!!}
		
	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
