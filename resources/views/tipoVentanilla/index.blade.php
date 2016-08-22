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
			<th>Tipo de Ventanilla</th>
			<th>Operacion</th>
		</thead>
		@foreach($TipoVentanillas as $TipoVentanilla)
		<tbody>
			<td>{{$TipoVentanilla->tipoVentanilla}}</td>
			<td>
				{!!link_to_route('TipoVentanilla.edit', $title = 'Editar', $parameters = $TipoVentanilla->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!!$TipoVentanillas->render()!!}
@stop