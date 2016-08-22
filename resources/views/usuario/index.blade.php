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
				<?php
					$TU = $user->tipoUser_id;
				?>
				<td>{{DB::table('tipo_usuarios')->where('id', $TU)->pluck('tipoUsuario')}}</td>
				<td>
					{!!link_to_route('Usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>
		{!!$users->render()!!}
@stop