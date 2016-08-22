@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
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