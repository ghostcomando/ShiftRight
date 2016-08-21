<br>
<div class="form-group">
	{!!form::label('Nombre de la ventanilla: ')!!}
	{!!form::text('ventanilla',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre de la ventanilla'])!!}
</div>
<div class="form-group">
			{!!form::label('Tipo de Ventanilla: ')!!}
			<div class="dropdown">
				{!!form::select('tipoVentanillas_id', $TipoVentanilla, null, ['class'=> 'btn btn-default'])!!}			
			</div>
		</div>
