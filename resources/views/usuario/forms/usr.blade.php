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
			{!!form::label('Tipo de usuario: ')!!}
			{!!form::number('tipoUser_id',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el tipo de usuario'])!!}
		</div>
		<div class="form-group">
			{!!form::label('Contrase&ntilde;a: ')!!}
			{!!form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contrase&ntilde;a'])!!}
		</div>