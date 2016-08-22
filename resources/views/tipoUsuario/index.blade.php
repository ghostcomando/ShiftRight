@extends('layouts.admin')
@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('message')}}
		</div>
	@endif
	@section('content')
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