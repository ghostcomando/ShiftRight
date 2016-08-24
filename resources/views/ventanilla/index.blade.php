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
				<th>Ventanilla</th>
				<th>Tipo de ventanilla</th>
				<th>Operacion</th>
			</thead>
			@foreach($Ventanillas as $Ventanilla)
			<tbody>
				<td>{{$Ventanilla->ventanilla}}</td>
				<?php
					$TV = $Ventanilla->tipoVentanillas_id;
				?>
				<td>{{DB::table('tipo_ventanillas')->where('id', $TV)->pluck('tipoVentanilla')}}</td>
				<td>
					{!!link_to_route('Ventanilla.edit', $title = 'Editar', $parameters = $Ventanilla->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			@endforeach
		</table>
		{!!$Ventanillas->render()!!}
@stop