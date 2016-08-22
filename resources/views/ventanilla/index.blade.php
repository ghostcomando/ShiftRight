@extends('layouts.admin')
	@section('content')
		@include('alerts.AlertsRequest')
		<table class="table">
			<thead>
				<th>Ventanilla</th>
				<th>Tipo de ventanilla</th>
				<th>Operacion</th>
			</thead>
			@foreach($Ventanillas as $Ventanilla)
			<tbody>
				<td>{{$Ventanilla->ventanilla}}</td>
				<td>{{$Ventanilla->tipoVentanillas_id}}</td>
				<td>
					{!!link_to_route('Ventanilla.edit', $title = 'Editar', $parameters = $Ventanilla->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>
		{!!$Ventanillas->render()!!}
@stop