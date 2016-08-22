<br>
<div class="form-group">
	{!!form::label('Nombre: ')!!}
	{!!form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre'])!!}
</div>
<div class="form-group">
	{!!form::label('Correo: ')!!}
	{!!form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el correo'])!!}
</div>
<div class="form-group">
	{!!form::label('Usuario: ')!!}
	{!!form::text('usuario',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el usuario'])!!}
</div>

<div class="form-group">
	{!!form::label('Tipo de Usuario: ')!!}
	<div class="dropdown">
		{!!form::select('tipoUser_id', $TipoUsuario, null, ['class'=> 'btn btn-default'])!!}		
	</div>
</div>

<div class="form-group">
	{!!form::label('Contrase&ntilde;a: ')!!}
	{!!form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contrase&ntilde;a'])!!}
</div>