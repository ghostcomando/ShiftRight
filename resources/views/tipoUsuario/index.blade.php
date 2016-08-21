@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		<table class="table">
			<thead>
				<th>Tipo de Usuario</th>
				<th>Operacion</th>
			</thead>
			@foreach($TipoUsuarios as $TipoUsuario)
			<tbody>
				<td>{{$TipoUsuario->tipoUsuario}}</td>
				<td>
					{!!link_to_route('TipoUsuario.edit', $title = 'Editar', $parameters = $TipoUsuario->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>
		{!!$TipoUsuarios->render()!!}
@stop