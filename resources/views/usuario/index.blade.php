@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Usuario</th>
				<th>Tipo Usuario</th>
				<th>Operacion</th>
			</thead>
			@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->usuario}}</td>
				<td>{{$user->tipoUser_id}}</td>
				<td>
					{!!link_to_route('Usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>
		{!!$users->render()!!}
@stop